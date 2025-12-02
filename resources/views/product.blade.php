<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $product->name ?? 'Product' }} - HomeDome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom Product Styles -->
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <!-- 3D Model Viewer Script -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>
</head>

<body>
    <!-- Header -->

    <header class="top-bar">
        <a href="/" class="top-logo">
            <img src="{{ asset('images/homeDomeLogo.png') }}" alt="HomeDome logo">
            <span class="top-logo-text">HomeDome</span>
        </a>


        <div class="top-search">
            <input class="top-search-input" type="text" placeholder="Search products...">
            <button class="top-search-button">Search</button>
        </div>

        <div class="top-icons">
            <a href="/login" class="icon-item">
                <i class="fa-solid fa-user"></i>
                <span>Account</span>

            </a>
            <a href="/cart" class="icon-item">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Basket</span>
            </a>
        </div>
    </header>

    <!-- the diffrent categories bar-->
    <div class="category-bar">
        <a href="/furniture">Furniture</a>
        <a href="/appliances">Appliances</a>
        <a href="/home-decor">Home Decor</a>
        <a href="/kitchen-ware">Kitchen Ware</a>
        <a href="/lighting">Lighting</a>
    </div>

    <!-- breadcrumbs section -->
    <div class="breadcrumbs">
        <a href="/">Home</a> >
        <a href="/appliances">{{ $product->category ?? 'Products' }}</a> >
        @if(isset($product->subcategory))
            <a href="/{{ strtolower(str_replace(' ', '-', $product->subcategory)) }}">{{ $product->subcategory }}</a> >
        @endif
        <span>{{ $product->name ?? 'Product' }}</span>
    </div>

    <!--Product Section -->
    <div class="product-container">

        <!-- Left  Media -->
        <div class="product-media">
            <div class="product-title-mobile">
                <h1 class="product-title">{{ $product->name }}</h1>
                <p class="product-sku">SKU: {{ $product->sku }}</p>

            </div>

            <!-- Main Image -->
            <div class="main-image-container">
                @if(isset($product->media) && count($product->media) > 0)
                    <img src="{{ asset($product->media[0]->url) }}" alt="{{ $product->name }}" class="main-image"
                        id="mainImage">
                @else
                    <img src="{{ asset('images/homeDomeLogo.png') }}" alt="{{ $product->name }}" class="main-image"
                        id="mainImage">
                @endif

                @if($product->energy_rating)

                    <span class="energy-badge">
                        <i class="fa-solid fa-leaf"></i> {{ $product->energy_rating }}
                    </span>
                @endif

                <button class="viewer-3d-button" onclick="open3DViewer()">
                    <i class="fa-solid fa-cube"></i>
                    View in 3D
                </button>
            </div>

            <!-- Thumbnail G -->
            @if(isset($product->media) && count($product->media) > 1)
                <div class="thumbnail-gallery">

                    @foreach($product->media as $index => $media)

                        @if($media->media_type === 'image')
                            <img src="{{ asset($media->url) }}" class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                onclick="changeImage(this)">
                        @endif
                    @endforeach
                </div>
            @endif
        </div>











        <!-- Right Purchase Info -->
        <div class="product-info">
            <div class="product-title-desktop">
                <h1 class="product-title">{{ $product->name }}</h1>
                <p class="product-sku">SKU: {{ $product->sku }}</p>
            </div>

            <!-- star ratinggs -->
            @if(isset($product->reviews) && count($product->reviews) > 0)
                <div class="rating-summary">
                    <div class="stars">
                        @php
                            $rating = $product->average_rating;
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
                    <span class="rating-text">{{ $product->average_rating }} out of 5</span>
                    <a href="#reviews" class="rating-link">({{ count($product->reviews) }} reviews)</a>
                </div>
            @endif

            <!-- Pricing -->
            <div class="price-section">
                <div>
                    <span class="price">£{{ number_format($product->price, 2) }}</span>
                </div>

                @if($product->is_available && $product->stock_quantity > 0)
                    <div class="stock-status in-stock">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>In Stock - {{ $product->stock_quantity }} Available</span>
                    </div>
                @else
                    <div class="stock-status out-of-stock">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <span>Out of Stock</span>
                    </div>
                @endif
            </div>

            @if($product->is_available && $product->stock_quantity > 0)
                <!-- Quantity Selector -->
                <div class="quantity-selector">
                    <label>Quantity:</label>
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" class="quantity-input" value="1" min="1"
                            max="{{ $product->stock_quantity }}">
                        <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                    </div>
                </div>

                <!-- add to basket and add to wishlist buttons -->
                <div class="cta-buttons">
                    <button class="btn btn-primary" onclick="addToBasket()">
                        <i class="fa-solid fa-cart-shopping"></i>
                        ADD TO BASKET
                    </button>
                    <!-- Add to wishlist button to be implemented later after mvp-->
                    <button class="btn btn-secondary" onclick="addToWishlist()">

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
            @if(isset($product->reviews) && count($product->reviews) > 0)
                <button class="tab" onclick="openTab('reviews')">Reviews ({{ count($product->reviews) }})</button>
            @endif
        </div>

        <!-- Description  -->
        <div id="description" class="tab-content active">
            <div class="description">
                <h2 style="margin-bottom: 16px;">Product Description</h2>
                <p style="margin-bottom: 16px;">
                    {{ $product->description }}
                </p>
            </div>
        </div>

        <!-- Specifications Tab -->
        <div id="specifications" class="tab-content">
            <h2 style="margin-bottom: 24px;">Technical Specifications</h2>
            <table class="specifications-table">
                <tbody>
                    <tr>
                        <th>Product Name</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>SKU</th>
                        <td>{{ $product->sku }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>£{{ number_format($product->price, 2) }}</td>
                    </tr>
                    @if($product->dimensions)
                        <tr>
                            <th>Dimensions</th>
                            <td>{{ $product->dimensions }}</td>
                        </tr>
                    @endif
                    @if($product->energy_rating)
                        <tr>
                            <th>Energy Rating</th>
                            <td>{{ $product->energy_rating }}</td>
                        </tr>
                    @endif
                    <tr>
                        <th>Availability</th>
                        <td>{{ $product->is_available ? 'Available' : 'Not Available' }}</td>
                    </tr>
                    <tr>
                        <th>Stock Quantity</th>
                        <td>{{ $product->stock_quantity }} units</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Reviews-->
        @if(isset($product->reviews) && count($product->reviews) > 0)
            <div id="reviews" class="tab-content">
                <div class="reviews-section">
                    <div class="reviews-header">
                        <div class="reviews-summary">
                            <div>
                                <div class="rating-large">{{ $product->average_rating }}</div>
                                <div class="stars" style="font-size: 20px; margin-top: 8px;">
                                    @php
                                        $rating = $product->average_rating;
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
                                Based on {{ count($product->reviews) }}
                                {{ count($product->reviews) === 1 ? 'review' : 'reviews' }}
                            </div>
                        </div>
                        <button class="write-review-btn" onclick="writeReview()">
                            <i class="fa-solid fa-pen"></i> Write a Review
                        </button>
                    </div>

                    <!-- Individual Reviews -->
                    @foreach($product->reviews as $review)
                        <div class="review-item">
                            <div class="review-header">
                                <div>
                                    <div class="reviewer-name">{{ $review->user->name }}</div>
                                    <div class="stars" style="font-size: 14px; color: #fbbf24; margin-top: 4px;">
                                        @for($i = 0; $i < $review->rating; $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                        @for($i = $review->rating; $i < 5; $i++)
                                            <i class="fa-regular fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="review-date">{{ \Carbon\Carbon::parse($review->submission_date)->format('F d, Y') }}
                                </div>
                            </div>
                            @if($review->review_text)
                                <div class="review-text">
                                    {{ $review->review_text }}
                                </div>
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
                if (isset($product->media)) {
                    foreach ($product->media as $media) {
                        if ($media->media_type === '3D_MODEL') {
                            $modelUrl = asset($media->url);
                            break;
                        }
                    }
                }
            @endphp

            @if($modelUrl)
                <model-viewer src="{{ $modelUrl }}" alt="A 3D model of {{ $product->name }}" auto-rotate camera-controls ar
                    shadow-intensity="1" style="width: 100%; height: 100%; background-color: #f5f5f5;">
                </model-viewer>
            @else
                <div class="no-model-message">
                    <i class="fa-solid fa-cube"></i>
                    <p>3D Model not available for this product.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Custom Product Script -->
    <script src="{{ asset('js/product.js') }}"></script>
</body>

</html>