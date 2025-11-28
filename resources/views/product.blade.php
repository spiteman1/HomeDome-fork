<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $product->name ?? 'Product' }} - HomeDome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --hd-orange: #F57C00;
            --hd-orange-brown: #E67E22;
            --hd-dark-red: #B03A2E;
            --hd-black: #000000;
            --hd-grey: #333333;
            --hd-text-muted: #6b7280;
            --hd-light-grey: #f5f5f5;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            min-height: 100vh;
            background: #ffffff;
        }

        /* Header Styles */
        .top-bar {
            background: var(--hd-orange);
            padding: 12px 24px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .top-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .top-logo img {
            width: 44px;
            height: 44px;
            border-radius: 8px;
            border: 2px solid #ffffff;
        }

        .top-logo-text {
            font-weight: 800;
            font-size: 20px;
            color: #ffffff;
        }

        .top-search {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .top-search-input {
            width: 100%;
            max-width: 600px;
            border-radius: 999px;
            border: none;
            padding: 8px 14px;
            font-size: 14px;
        }

        .top-search-button {
            margin-left: 8px;
            padding: 8px 16px;
            border-radius: 999px;
            border: none;
            background: var(--hd-dark-red);
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        .top-icons {
            display: flex;
            gap: 28px;
            align-items: center;
        }

        .icon-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ffffff;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
        }

        .icon-item i {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .icon-item:hover {
            opacity: 0.8;
        }

        .category-bar {
            background: var(--hd-orange-brown);
            color: #ffffff;
            font-size: 13px;
            padding: 8px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category-bar a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            white-space: nowrap;
        }

        .category-bar a:hover {
            text-decoration: underline;
        }

        /* Breadcrumbs */
        .breadcrumbs {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 24px;
            font-size: 14px;
            color: var(--hd-text-muted);
        }

        .breadcrumbs a {
            color: var(--hd-orange);
            text-decoration: none;
        }

        .breadcrumbs a:hover {
            text-decoration: underline;
        }

        /* Main Product Container */
        .product-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px 48px;
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 40px;
        }

        /* Left Column - Media */
        .product-media {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .product-title-mobile {
            display: none;
        }

        .main-image-container {
            position: relative;
            background: var(--hd-light-grey);
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 1;
        }

        .main-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .energy-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: #22c55e;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 14px;
        }

        .viewer-3d-button {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--hd-orange);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .viewer-3d-button:hover {
            background: var(--hd-dark-red);
        }

        .thumbnail-gallery {
            display: flex;
            gap: 12px;
            overflow-x: auto;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            border: 2px solid #e5e7eb;
            border-radius: 4px;
            cursor: pointer;
            flex-shrink: 0;
            object-fit: contain;
            padding: 4px;
        }

        .thumbnail:hover,
        .thumbnail.active {
            border-color: var(--hd-orange);
        }

        /* the buying information styles */
        .product-info {
            position: sticky;
            top: 20px;
            height: fit-content;
        }

        .product-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--hd-grey);
            margin-bottom: 8px;
        }

        .product-sku {
            font-size: 14px;
            color: var(--hd-text-muted);
            margin-bottom: 16px;
        }

        .rating-summary {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e5e7eb;
        }

        .stars {
            color: #fbbf24;
            font-size: 18px;
        }

        .rating-text {
            color: var(--hd-text-muted);
            font-size: 14px;
        }

        .rating-link {
            color: var(--hd-orange);
            text-decoration: none;
            font-size: 14px;
        }

        .rating-link:hover {
            text-decoration: underline;
        }

        .price-section {
            background: var(--hd-light-grey);
            padding: 24px;
            border-radius: 8px;
            margin-bottom: 24px;
        }

        .price {
            font-size: 36px;
            font-weight: 700;
            color: var(--hd-grey);
            margin-bottom: 8px;
        }

        .stock-status {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            font-weight: 600;
        }

        .stock-status.in-stock {
            color: #22c55e;
        }

        .stock-status.out-of-stock {
            color: #ef4444;
        }

        .quantity-selector {
            margin: 24px 0;
        }

        .quantity-selector label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .quantity-btn {
            width: 36px;
            height: 36px;
            border: 1px solid #e5e7eb;
            background: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        .quantity-btn:hover {
            background: var(--hd-light-grey);
        }

        .quantity-input {
            width: 60px;
            height: 36px;
            text-align: center;
            border: 1px solid #e5e7eb;
            border-radius: 4px;
            font-size: 16px;
        }

        .cta-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .btn {
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--hd-orange);
            color: white;
        }

        .btn-primary:hover {
            background: var(--hd-dark-red);
        }

        .btn-secondary {
            background: white;
            color: var(--hd-grey);
            border: 2px solid #e5e7eb;
        }

        .btn-secondary:hover {
            border-color: var(--hd-orange);
            color: var(--hd-orange);
        }

        /* Product Details Section */
        .product-details {
            max-width: 1200px;
            margin: 48px auto;
            padding: 0 24px;
        }

        .tabs {
            display: flex;
            gap: 0;
            border-bottom: 2px solid #e5e7eb;
            margin-bottom: 32px;
        }

        .tab {
            padding: 16px 24px;
            background: none;
            border: none;
            font-size: 16px;
            font-weight: 600;
            color: var(--hd-text-muted);
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.2s;
        }

        .tab:hover {
            color: var(--hd-grey);
        }

        .tab.active {
            color: var(--hd-orange);
            border-bottom-color: var(--hd-orange);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .description {
            font-size: 16px;
            line-height: 1.8;
            color: var(--hd-grey);
        }

        .specifications-table {
            width: 100%;
            border-collapse: collapse;
        }

        .specifications-table th,
        .specifications-table td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        .specifications-table th {
            background: var(--hd-light-grey);
            font-weight: 600;
            width: 30%;
        }

        .specifications-table tr:hover {
            background: #fafafa;
        }

        /* Reviews Section */
        .reviews-section {
            margin-top: 24px;
        }

        .reviews-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .reviews-summary {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .rating-large {
            font-size: 48px;
            font-weight: 700;
            color: var(--hd-grey);
        }

        .write-review-btn {
            background: var(--hd-orange);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .write-review-btn:hover {
            background: var(--hd-dark-red);
        }

        .review-item {
            padding: 24px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 16px;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .reviewer-name {
            font-weight: 600;
            color: var(--hd-grey);
        }

        .review-date {
            font-size: 14px;
            color: var(--hd-text-muted);
        }

        .review-text {
            line-height: 1.6;
            color: var(--hd-grey);
        }

        /* Responsive */
        @media (max-width: 968px) {
            .product-container {
                grid-template-columns: 1fr;
            }

            .product-info {
                position: static;
            }

            .product-title-mobile {
                display: block;
                margin-bottom: 16px;
            }

            .product-title-desktop {
                display: none;
            }
        }
    </style>
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

    <!-- the diffrent categories  bar-->
    <div class="category-bar">
        <a href="/furniture">Furniture</a>
        <a href="/appliances">Appliances</a>
        <a href="/home-decor">Home Decor</a>
        <a href="/kitchen-ware">Kitchen Ware</a>
        <a href="/lighting">Lighting</a>
    </div>

    <!-- Breadcrumbs -->
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

    <script>
        // Tab switching
        function openTab(tabName) {
            const tabContents = document.getElementsByClassName('tab-content');
            const tabs = document.getElementsByClassName('tab');

            for (let content of tabContents) {
                content.classList.remove('active');
            }

            for (let tab of tabs) {
                tab.classList.remove('active');
            }

            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }

        // Image gallery
        function changeImage(thumbnail) {
            document.getElementById('mainImage').src = thumbnail.src;
            document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
            thumbnail.classList.add('active');
        }

        // Quantity controls
        function increaseQuantity() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.max);
            const current = parseInt(input.value);
            if (current < max) {
                input.value = current + 1;
            }
        }

        function decreaseQuantity() {
            const input = document.getElementById('quantity');
            const min = parseInt(input.min);
            const current = parseInt(input.value);
            if (current > min) {
                input.value = current - 1;
            }
        }

        // Action buttons
        function addToBasket() {
            const quantity = document.getElementById('quantity').value;
            alert(`Added ${quantity} item(s) to basket!`);
            // function  to be considered later
        }

        function addToWishlist() {
            alert('Added to wishlist!');
            // action to be considered later
        }

        function open3DViewer() {
            alert('Opening 3D Product Viewer...');
            // function to be considered later
        }

        function writeReview() {
            alert('Opening review form...');
            // unfinished functions to be considered later
        }
    </script>
</body>

</html>