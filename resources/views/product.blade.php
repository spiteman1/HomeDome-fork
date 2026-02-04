<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $product['name'] ?? 'Product' }} - HomeDome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom Product Styles -->
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <!-- 3D Model Viewer Script -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>
</head>

<body>
    <!-- Header -->

    @vite('resources/css/app.css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



    </head>

    <body>
        <div class="page">

            <header class="top-bar">
                <div class="top-logo">
                    <a href="/"><img src="{{ asset('images/homeDomeLogo.png') }}" alt="HomeDome logo"></a>
                    <a href="/"><span class="top-logo-text">HomeDome</span></a>
                </div>

                <div class="top-search">
                    <input id="searchInput" class="top-search-input" type="text" placeholder="Search for products...">
                    <button id="searchButton" class="top-search-button">
                        Search
                    </button>
                </div>

                <script>
                    const searchInput = document.getElementById('searchInput');
                    const searchButton = document.getElementById('searchButton');

                    function performSearch() {
                        const query = searchInput.value.trim();
                        if (!query) {
                            alert('Please enter a search term!');
                            return;
                        } else {
                            window.location.href = `/search?query=${encodeURIComponent(query)}`;
                        }


                    }


                    searchButton.addEventListener('click', performSearch);


                    searchInput.addEventListener('keydown', (e) => {
                        if (e.key === 'Enter') performSearch();
                    });
                </script>



                <div class="top-icons">
                    <a href="/login" class="icon-item">
                        <i class="fa-solid fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a href="/wishlist" class="icon-item">
                        <i class="fa-regular fa-heart"></i>
                        <span>Wishlist</span>
                        <span class="icon-badge wishlist">{{ $wishlistCount ?? 0 }}</span>
                    </a>
                    <a href="{{ route('Basket') }}" class="icon-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Basket</span>
                        <span class="icon-badge basket">{{ $cartCount ?? 0 }}</span>
                    </a>
                </div>

            </header>

            <div class="category-bar">
                <a href="{{ route('category.show', 'furniture') }}">Furniture</a>
                <a href="{{ route('category.show', 'appliances') }}">Appliances</a>
                <a href="{{ route('category.show', 'home-decor') }}">Home Decor</a>
                <a href="{{ route('category.show', 'kitchen-ware') }}">Kitchenware</a>
                <a href="{{ route('category.show', 'lighting') }}">Lighting</a>
                <a class="headerLinks" href="{{route('About-Us')}}">About Us</a>
                <a href="{{route('Contact-us')}}"> Contact Us </a>
            </div>


            <!-- breadcrumbs section -->
            <div class="breadcrumbs">
                <a href="/">Home</a> >
                <a href="/appliances">{{ $product['category'] ?? 'Products' }}</a> >
                @if(isset($product['subcategory']))
                    <a
                        href="/{{ strtolower(str_replace(' ', '-', $product['subcategory'])) }}">{{ $product['subcategory'] }}</a>
                    >
                @endif
                <span>{{ $product['name'] ?? 'Product' }}</span>
            </div>

            <!-- Product Section -->
            <div class="product-container">

                <!-- Left Media -->
                <div class="product-media">
                    <div class="product-title-mobile">
                        <h1 class="product-title">{{ $product['name'] }}</h1>
                        <p class="product-sku">SKU: {{ $product['sku'] }}</p>
                    </div>

                    <!-- Main Image -->
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

                    <!-- Thumbnail Gallery -->
                    @if(isset($product['media']) && count($product['media']) > 1)
                        <div class="thumbnail-gallery">
                            @foreach($product['media'] as $index => $media)
                                @if($media['type'] === 'image')
                                    <img src="{{ asset($media['url']) }}" class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                        onclick="changeImage(this)">
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Right Purchase Info -->
                <div class="product-info">
                    <div class="product-title-desktop">
                        <h1 class="product-title">{{ $product['name'] }}</h1>
                        <p class="product-sku">SKU: {{ $product['sku'] }}</p>
                    </div>

                    <!-- Star ratings -->
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
                            <a href="#reviews" class="rating-link">({{ count($product['reviews']) }} reviews)</a>
                        </div>
                    @endif

                    <!-- Pricing -->
                    <div class="price-section">
                        <div>
                            <span class="price">£{{ number_format($product['price'], 2) }}</span>
                        </div>

                        @if($product['is_available'] && $product['stock_quantity'] > 0)
                            <div class="stock-status in-stock">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>In Stock - {{ $product['stock_quantity'] }} Available</span>
                            </div>
                        @else
                            <div class="stock-status out-of-stock">
                                <i class="fa-solid fa-circle-xmark"></i>
                                <span>Out of Stock</span>
                            </div>
                        @endif
                    </div>

                    @if($product['is_available'] && $product['stock_quantity'] > 0)
                        <!-- Quantity Selector Form for Basket -->
                        <form id="basketForm" action="{{ route('addProduct.addProduct', ['pid' => $product['id']]) }}"
                            method="POST">
                            @csrf
                            <div class="quantity-selector">
                                <label>Quantity:</label>
                                <div class="quantity-controls">
                                    <button type="button" class="quantity-btn" onclick="decreaseQuantity()">-</button>
                                    <input type="number" id="quantity" name="quantity" class="quantity-input" value="1"
                                        min="1" max="{{ $product['stock_quantity'] }}">
                                    <button type="button" class="quantity-btn" onclick="increaseQuantity()">+</button>
                                </div>
                            </div>
                        </form>

                        <!-- Wishlist Form -->
                        <form id="wishlistForm" action="{{ route('wishlist.add', ['id' => $product['id']]) }}"
                            method="POST">
                            @csrf
                        </form>

                        <!-- Add to basket and wishlist Buttons -->
                        <div class="cta-buttons">
                            <button type="submit" form="basketForm" class="btn btn-primary">
                                <i class="fa-solid fa-cart-shopping"></i>
                                ADD TO BASKET
                            </button>
                            <button type="submit" form="wishlistForm" class="btn btn-secondary">
                                <i class="fa-regular fa-heart"></i>
                                Add to Wishlist
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Product Details Tabs -->
            <div class="product-details">
                <div class="tabs">
                    <button class="tab active" onclick="openTab('description')">Description</button>
                    <button class="tab" onclick="openTab('specifications')">Specifications</button>
                    @if(isset($product['reviews']) && count($product['reviews']) > 0)
                        <button class="tab" onclick="openTab('reviews')">Reviews ({{ count($product['reviews']) }})</button>
                    @endif
                </div>

                <!-- Description -->
                <div id="description" class="tab-content active">
                    <div class="description">
                        <h2 style="margin-bottom: 16px;">Product Description</h2>
                        <p style="margin-bottom: 16px;">{{ $product['description'] }}</p>
                    </div>
                </div>

                <!-- Specifications Tab -->
                <div id="specifications" class="tab-content">
                    <h2 style="margin-bottom: 24px;">Technical Specifications</h2>
                    <table class="specifications-table">
                        <tbody>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product['name'] }}</td>
                            </tr>
                            <tr>
                                <th>SKU</th>
                                <td>{{ $product['sku'] }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>£{{ number_format($product['price'], 2) }}</td>
                            </tr>

                            @if($product['dimensions'])
                                <tr>
                                    <th>Dimensions</th>
                                    <td>{{ $product['dimensions'] }}</td>
                                </tr>
                            @endif
                            @if($product['energy_rating'])
                                <tr>
                                    <th>Energy Rating</th>
                                    <td>{{ $product['energy_rating'] }}</td>
                                </tr>
                            @endif

                            <tr>
                                <th>Availability</th>
                                <td>{{ $product['is_available'] ? 'Available' : 'Not Available' }}</td>
                            </tr>
                            <tr>
                                <th>Stock Quantity</th>
                                <td>{{ $product['stock_quantity'] }} units</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reviews -->
                @if(isset($product['reviews']) && count($product['reviews']) > 0)
                    <div id="reviews" class="tab-content">
                        <div class="reviews-section">
                            <div class="reviews-header">
                                <div class="reviews-summary">
                                    <div>
                                        <div class="rating-large">{{ $product['average_rating'] ?? 0 }}</div>
                                        <div class="stars" style="font-size: 20px; margin-top: 8px;">
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
                                    </div>
                                    <div style="color: var(--hd-text-muted); font-size: 14px;">
                                        Based on {{ count($product['reviews']) }}
                                        {{ count($product['reviews']) === 1 ? 'review' : 'reviews' }}
                                    </div>
                                </div>
                                @auth
                                    <button class="write-review-btn" onclick="toggleReviewForm()">
                                        <i class="fa-solid fa-pen"></i> Write a Review
                                    </button>
                                @else
                                    <a href="{{ route('login') }}" class="write-review-btn"
                                        style="text-decoration: none; display: inline-block;">
                                        <i class="fa-solid fa-lock"></i> Login to Review
                                    </a>
                                @endauth
                            </div>

                            <!-- Review Form (Hidden by default) -->
                            <div id="reviewFormContainer"
                                style="display: none; margin-bottom: 32px; padding: 24px; background: #f9fafb; border-radius: 8px; border: 1px solid #e5e7eb;">
                                <h3 style="margin-bottom: 16px;">Write your review</h3>
                                <form action="{{ route('product.review', $product['id']) }}" method="POST">
                                    @csrf
                                    <div style="margin-bottom: 16px;">
                                        <label style="display: block; margin-bottom: 8px; font-weight: 600;">Rating</label>
                                        <div class="star-rating-input">
                                            <input type="radio" id="star5" name="rating" value="5" required /><label
                                                for="star5" title="5 stars"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4"
                                                title="4 stars"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3"
                                                title="3 stars"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2"
                                                title="2 stars"><i class="fa-solid fa-star"></i></label>
                                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1"
                                                title="1 star"><i class="fa-solid fa-star"></i></label>
                                        </div>
                                    </div>
                                    <div style="margin-bottom: 16px;">
                                        <label for="review_text"
                                            style="display: block; margin-bottom: 8px; font-weight: 600;">Review</label>
                                        <textarea name="review_text" id="review_text" rows="4"
                                            style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #d1d5db;"
                                            placeholder="Share your thoughts about this product..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </form>
                            </div>

                            @if(session('success'))
                                <div
                                    style="background: #dcfce7; color: #166534; padding: 12px; border-radius: 8px; margin-bottom: 16px;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('error'))
                                <div
                                    style="background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 8px; margin-bottom: 16px;">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <!-- Individual Reviews -->
                            @foreach($product['reviews'] as $review)
                                <div class="review-item">
                                    <div class="review-header">
                                        <div>
                                            <div class="reviewer-name">{{ $review['user']['name'] ?? 'Anonymous' }}</div>
                                            <div class="stars" style="font-size: 14px; color: #fbbf24; margin-top: 4px;">
                                                @for($i = 0; $i < $review['rating']; $i++)
                                                    <i class="fa-solid fa-star"></i>
                                                @endfor
                                                @for($i = $review['rating']; $i < 5; $i++)
                                                    <i class="fa-regular fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="review-date">
                                            {{ \Carbon\Carbon::parse($review['submission_date'])->format('F d, Y') }}
                                        </div>
                                    </div>
                                    @if($review['text'])
                                        <div class="review-text">{{ $review['text'] }}</div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- 3D Viewer Modal -->
            <div id="viewerModal" class="viewer-modal">
                <div class="viewer-content">
                    <button class="close-viewer" onclick="close3DViewer()">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

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
                        <model-viewer src="{{ $modelUrl }}" alt="A 3D model of {{ $product['name'] }}" auto-rotate
                            camera-controls ar shadow-intensity="1"
                            style="width: 100%; height: 100%; background-color: #f5f5f5;"></model-viewer>
                    @else
                        <div class="no-model-message">
                            <i class="fa-solid fa-cube"></i>
                            <p>3D Model not available for this product.</p>
                        </div>
                    @endif
                </div>
            </div>

            <script src="{{ asset('js/product.js') }}"></script>