@extends('layouts.app')

@section('title', ($product['name'] ?? 'Product') . ' - HomeDome')

@section('content')

<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>

<div class="breadcrumbs">
    <a href="/">Home</a> >
    <a href="/appliances">{{ $product['category'] ?? 'Products' }}</a> >
    @if(isset($product['subcategory']))
        <a href="/{{ strtolower(str_replace(' ', '-', $product['subcategory'])) }}">
            {{ $product['subcategory'] }}
        </a> >
    @endif
    <span>{{ $product['name'] ?? 'Product' }}</span>
</div>

<div class="product-container">

    <div class="product-media">
        <div class="product-title-mobile">
            <h1 class="product-title">{{ $product['name'] }}</h1>
            <p class="product-sku">SKU: {{ $product['sku'] }}</p>
        </div>

        <div class="main-image-container">
            @if(isset($product['media']) && count($product['media']) > 0)
                <img src="{{ asset($product['media'][0]['url']) }}" alt="{{ $product['name'] }}"
                    class="main-image" id="mainImage">
            @else
                <img src="{{ asset('images/homeDomeLogo.png') }}" alt="{{ $product['name'] }}"
                    class="main-image" id="mainImage">
            @endif

            @if($product['energy_rating'])
                <span class="energy-badge">
                    <i class="fa-solid fa-leaf"></i> {{ $product['energy_rating'] }}
                </span>
            @endif

            <button class="viewer-3d-button" onclick="open3DViewer()">
                <i class="fa-solid fa-cube"></i>
                View in 3D
            </button>
        </div>

        @if(isset($product['media']) && count($product['media']) > 1)
            <div class="thumbnail-gallery">
                @foreach($product['media'] as $index => $media)
                    @if($media['type'] === 'image')
                        <img src="{{ asset($media['url']) }}"
                             class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                             onclick="changeImage(this)">
                    @endif
                @endforeach
            </div>
        @endif
    </div>

    <div class="product-info">
        <div class="product-title-desktop">
            <h1 class="product-title">{{ $product['name'] }}</h1>
            <p class="product-sku">SKU: {{ $product['sku'] }}</p>
        </div>

        @if(isset($product['reviews']) && count($product['reviews']) > 0)
            <div class="rating-summary">
                <div class="stars">
                    @php
                        $rating = $product['average_rating'] ?? 0;
                        $fullStars = floor($rating);
                        $hasHalfStar = ($rating - $fullStars) >= 0.5;
                    @endphp

                    @for($i = 0; $i < $fullStars; $i++)
                        <i class="fa-solid fa-star"></i>
                    @endfor

                    @if($hasHalfStar)
                        <i class="fa-solid fa-star-half-stroke"></i>
                    @endif

                    @for($i = 0; $i < (5 - $fullStars - ($hasHalfStar ? 1 : 0)); $i++)
                        <i class="fa-regular fa-star"></i>
                    @endfor
                </div>

                <span class="rating-text">{{ $rating }} out of 5</span>
                <a href="#reviews" class="rating-link">
                    ({{ count($product['reviews']) }} reviews)
                </a>
            </div>
        @endif

        <div class="price-section">
            <span class="price">£{{ number_format($product['price'], 2) }}</span>

            @if($product['is_available'] && $product['stock_quantity'] > 0)
                <div class="stock-status in-stock">
                    <i class="fa-solid fa-circle-check"></i>
                    In Stock - {{ $product['stock_quantity'] }} Available
                </div>
            @else
                <div class="stock-status out-of-stock">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Out of Stock
                </div>
            @endif
        </div>

        @if($product['is_available'] && $product['stock_quantity'] > 0)
            <form action="{{ route('addProduct.addProduct', ['pid' => $product['id']]) }}" method="POST">
                @csrf

                <div class="quantity-selector">
                    <label>Quantity:</label>
                    <div class="quantity-controls">
                        <button type="button" onclick="decreaseQuantity()">-</button>
                        <input type="number" name="quantity" id="quantity" value="1"
                               min="1" max="{{ $product['stock_quantity'] }}">
                        <button type="button" onclick="increaseQuantity()">+</button>
                    </div>
                </div>

                <div class="cta-buttons">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-cart-shopping"></i>
                        ADD TO BASKET
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="addToWishlist()">
                        <i class="fa-regular fa-heart"></i>
                        Add to Wishlist
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>

<div class="product-details">
    <div class="tabs">
        <button class="tab active" onclick="openTab('description')">Description</button>
        <button class="tab" onclick="openTab('specifications')">Specifications</button>
        @if(isset($product['reviews']) && count($product['reviews']) > 0)
            <button class="tab" onclick="openTab('reviews')">
                Reviews ({{ count($product['reviews']) }})
            </button>
        @endif
    </div>

    <div id="description" class="tab-content active">
        <p>{{ $product['description'] }}</p>
    </div>

    <div id="specifications" class="tab-content">
        <table class="specifications-table">
            <tbody>
                <tr><th>SKU</th><td>{{ $product['sku'] }}</td></tr>
                <tr><th>Price</th><td>£{{ number_format($product['price'], 2) }}</td></tr>
                <tr><th>Availability</th><td>{{ $product['is_available'] ? 'Available' : 'Not Available' }}</td></tr>
                <tr><th>Stock</th><td>{{ $product['stock_quantity'] }}</td></tr>
            </tbody>
        </table>
    </div>

    @if(isset($product['reviews']) && count($product['reviews']) > 0)
        <div id="reviews" class="tab-content">
            @foreach($product['reviews'] as $review)
                <div class="review-item">
                    <strong>{{ $review['user']['name'] ?? 'Anonymous' }}</strong>
                    <p>{{ $review['text'] }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>

<div id="viewerModal" class="viewer-modal">
    <div class="viewer-content">
        <button class="close-viewer" onclick="close3DViewer()">×</button>

        @php
            $modelUrl = '';
            if (isset($product['media'])) {
                foreach ($product['media'] as $media) {
                    if ($media['type'] === '3D_MODEL') {
                        $modelUrl = asset($media['url']);
                        break;
                    }
                }
            }
        @endphp

        @if($modelUrl)
            <model-viewer src="{{ $modelUrl }}" auto-rotate camera-controls></model-viewer>
        @else
            <p>3D model not available.</p>
        @endif
    </div>
</div>

<script src="{{ asset('js/product.js') }}"></script>

@endsection