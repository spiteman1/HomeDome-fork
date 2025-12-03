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

    @vite('resources/css/app.css')


        <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <style>
            :root {
                --hd-orange: #F57C00;
                --hd-orange-brown: #E67E22;
                --hd-dark-red: #B03A2E;
                --hd-black: #000000;
                --hd-grey: #333333;
                --hd-text-muted: #6b7280; }

            * { box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }

            body { min-height: 100vh;
               background: #ffffff;
               display: block;
               margin: 0; }

            .page { width: 100%;
               height: 100%;
               margin: 0;
               border: none;
               border-radius: 0;
               box-shadow: none; }

            .top-bar { background: var(--hd-orange);
                padding: 12px 24px;
                display: flex;
                align-items: center;
                gap: 16px; }

            .top-bar a {
              text-decoration: none;

            }

            .top-logo { display: flex;
                align-items: center;
                gap: 8px; }

            .top-logo img { width: 44px;
                height: 44px;
                border-radius: 8px;
                border: 2px solid #ffffff; }

            .top-logo-text { font-weight: 800;
                font-size: 20px;
                color: #ffffff; }

            .top-search { flex: 1;
                display: flex;
                justify-content: center; }

            .top-search-input { width: 100%;
                max-width: 600px;
                border-radius: 999px;
                border: none;
                padding: 8px 14px;
                font-size: 14px; }

            .top-search-button { margin-left: 8px;
                padding: 8px 16px;
                border-radius: 999px;
                border: none;
                background: var(--hd-dark-red);
                color: white;
                font-size: 14px;
                cursor: pointer; }

            .top-icons { display: flex;
                gap: 28px;
                align-items: center; }

            .icon-item { display: flex;
                flex-direction: column;
                align-items: center;
                color: #ffffff;
                text-decoration: none;
                font-size: 12px;
                font-weight: 500;
                position: relative;}

            .icon-item i { font-size: 20px;
                margin-bottom: 4px; }

            .icon-item:hover { opacity: 0.8; }

            .icon-badge { position: absolute;
                top: -4px;
                right: -10px;
                min-width: 16px;
                height: 16px;
                padding: 0 4px;
                border-radius: 999px;
                background: #ffffff;
                color: var(--hd-dark-red);
                font-size: 10px;
                font-weight: 700;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 0 4px rgba(0,0,0,0.25); }

            .icon-badge.wishlist { background: #ffffff;
                color: #B03A2E; }

            .icon-badge.basket { background: #ffffff;
                color: #B03A2E; }

            .category-bar { background: var(--hd-orange-brown);
                color: #ffffff;
                font-size: 13px;
                padding: 8px 40px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 16px;
                flex-wrap: wrap; }

            .category-bar a { color: #ffffff;
                text-decoration: none;
                font-weight: 500; }

            .category-bar a:hover { text-decoration: underline;}

            .content { display: flex;
                flex-wrap: wrap;
                background: #ffffff;
                min-height: calc(100vh - 70px);
                align-items: stretch; }

            .hero { flex: 1 1 45%;
                position: relative;
                padding: 40px 32px;
                overflow: hidden;
                background: linear-gradient(135deg, var(--hd-orange) 0%, var(--hd-orange-brown) 55%, var(--hd-dark-red) 100%);
                color: #ffffff;
                display: flex;
                align-items: center; }

            .hero::before { content: "";
                position: absolute;
                inset: -40px -60px auto;
                background-image: url('{{ asset('images/homedome-logo.png') }}');
                background-repeat: no-repeat;
                background-position: top left;
                background-size: 260px 260px;
                filter: blur(6px);
                opacity: 0.25;
                z-index: 0; }

            .hero-inner {position: relative;
                z-index: 1; }

            .hero-title { font-size: 48px;
                font-weight: 900;
                letter-spacing: -0.03em;
                line-height: 1.1;
                display: block;
                white-space: nowrap;
                animation: fadeSlide 0.8s ease-out forwards;
                opacity: 0;
                transform: translateY(12px);  }

                @keyframes fadeSlide {
                0% { opacity: 0;
                    transform: translateY(20px); }
                100% { opacity: 1;
                    transform: translateY(0); } }

            .hero-sub { margin-top: 10px;
                font-size: 16px;
                max-width: 320px; }


            .hero-badge { margin-top: 20px;
                display: inline-block;
                padding: 8px 16px;
                border-radius: 999px;
                background: rgba(0, 0, 0, 0.16);
                font-size: 13px; }

            .form-side { flex: 1 1 55%;
                padding: 32px 40px 36px;
                display: flex;
                align-items: center; }

            .form-inner { width: 100%;
                max-width: 600px;
                margin: 0 auto; }

            .form-heading { font-size: 22px;
                margin-bottom: 4px;
                color: var(--hd-black); }

            .form-sub { font-size: 13px;
                color: var(--hd-text-muted);
                margin-bottom: 16px; }

            .field { margin-bottom: 12px; }

            .field label { display: block;
                font-size: 13px;
                margin-bottom: 4px;
                color: #374151; }

            .field input { width: 100%;
                padding: 10px 11px;
                border-radius: 10px;
                border: 1px solid #d1d5db;
                font-size: 14px; }

            .field input::placeholder { color: #9ca3af;}

            .field input:focus { outline: none;
                border-color: var(--hd-orange);
                box-shadow: 0 0 0 1px rgba(245, 124, 0, 0.25); }

            .row-between { display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 12px;
                margin-bottom: 10px; }

            .checkbox {  display: inline-flex;
                align-items: center;
                gap: 4px; }

            .checkbox input { width: 14px;
                height: 14px;
                accent-color: var(--hd-orange);  }

            .link-inline {  color: var(--hd-dark-red);
                font-weight: 500;
                text-decoration: none; }

            .link-inline:hover { text-decoration: underline; }

            .captcha-box { margin: 10px 0 6px;
                padding: 10px;
                border-radius: 10px;
                border: 1px dashed #d1d5db;
                font-size: 12px;
                text-align: center;
                color: var(--hd-text-muted);}

            .btn-primary { width: 100%;
                border: none;
                border-radius: 999px;
                padding: 10px;
                background: var(--hd-dark-red);
                color: #ffffff;
                font-weight: 600;
                font-size: 15px;
                cursor: pointer;
                box-shadow: 0 12px 36px rgba(176, 58, 46, 0.5); }

            .btn-primary:hover { background: #8b241b; }

            .helper-text { margin-top: 10px;
                font-size: 12px;
                text-align: center;
                color: var(--hd-text-muted); }

            .helper-text a { color: var(--hd-dark-red);
                text-decoration: none;
                font-weight: 600; }

            .helper-text a:hover { text-decoration: underline; }


            @media (max-width: 900px) {

                .content { flex-direction: column;
                    align-items: stretch;}

                .hero { order: -1; }

                .form-side { padding-top: 24px;
                    padding-bottom: 32px; }}

            @media (max-width: 600px) {

                .page { margin-top: 10px;
                    border-radius: 0; }

                .top-bar { flex-direction: column;
                    align-items: flex-start;
                    gap: 8px; }

                .top-search { width: 100%; }

                .form-side { padding-inline: 20px; }

                .hero { padding-inline: 20px; }

                .hero-title { font-size: 32px;
                    white-space: normal; }


                    }
        </style>

    </head>
    <body>
    <div class="page">

        <header class="top-bar">
            <div class="top-logo">
                <a href="/"><img src="{{ asset('images/homeDomeLogo.png') }}" alt="HomeDome logo"></a>
                <a href="/"><span class="top-logo-text">HomeDome</span></a>
            </div>

           <div class="top-search">
             <input
               id="searchInput"
               class="top-search-input"
               type="text"
               placeholder="Search for products..."
             >
             <button
               id="searchButton"
               class="top-search-button"
             >
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
             <a class= "headerLinks" href="/aboutUs">About Us</a>

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
