<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="HomeDome.jpg" type="image/x-icon">
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
<br>
<div class="About-us">
    <img src="ChatGPT Image Nov 28, 2025, 12_47_33 AM.png" alt="About us banner">
    <h1><strong><u>About Us</u></strong></h1>
</div>

<div class="Welcome">
    <p><i>
        Welcome to HomeDome where comfort, style, and smart living come together.
        We’re your one-stop destination for modern furniture and high quality home appliances,
        designed to make every corner of your home feel just right.
    </i></p>
</div>

<div class="us-info">
    <h2>Who We Are</h2>
    <p id="p1">
        At HomeDome, we are a team dedicated to helping people create comfortable and beautiful living spaces. We offer a wide range of modern furniture, innovative appliances, and practical home solutions that bring style, reliability, and convenience into everyday life. From cozy sofas and elegant dining sets to energy efficient refrigerators and smart washing machines, every product is selected with care to ensure quality and lasting comfort.

HomeDome is built on a passion for making home improvement simple and enjoyable. Whether you are furnishing your first apartment, refreshing a room, or upgrading your household appliances, our friendly team is here to guide you with helpful advice and genuine support. We continue to learn from our customers and adapt to what real homes need. Our goal is to help you create spaces that feel warm, inspiring, and truly personal.
    </p>
</div>

<section class="card-section">
    <div class="cards">
        <div class="card">
            <h3>Our Mission</h3>
            <p>
                To provide high quality furniture and appliances that enhance everyday living through
                thoughtful design and reliable craftsmanship.
            </p>
        </div>

        <div class="card">
            <h3>Our Vision</h3>
            <p>
                To become the most trusted home living brand, inspiring comfort and creativity in every household.
            </p>
        </div>

        <div class="card">
            <h3>Our Values</h3>
            <p>
                Quality, integrity, innovation, and customer first service are the pillars that guide everything we do.
            </p>
        </div>
    </div>
</section>
<div class="our-story">
    <h2>Our Story</h2>
<p>
    HomeDome began with a vision to bring stylish furniture and dependable home appliances together in one welcoming place. What started as a small local idea quickly grew into a brand focused on offering quality products that make everyday living easier and more enjoyable. From the start, we have believed that a home should feel comfortable, functional, and uniquely personal.

As we expanded, we stayed committed to listening to our customers and understanding what real homes need. Whether it is helping someone furnish a new space or upgrade their appliances, our team works to provide honest guidance and a smooth experience. HomeDome continues to grow with the same purpose we began with: helping people create homes they love
</p>
</div>
<section class="why-choose-us">
<h2>Why Choose Us?</h2>
<section class="qualities">
<div class="quality">
<h3>Premium Quality</h3>
<p>Every product is carefully selected for durability, comfort, and long lasting performance in your home.</p>
</div>
<div class="quality">
<h3>Modern Designs for Every Home</h3>
<p>Our stylish furniture and appliances blend seamlessly with any home, adding both function and flair.</p>
</div>
<div class="quality">
<h3>Fast & Reliable Delivery</h3>
<p>Your items arrive quickly and safely, ready to enhance your home without any hassle.</p>
</div>
<div class="quality">
<h3>Friendly, Personalized Service</h3>
<p>We guide you every step of the way, ensuring a smooth and enjoyable shopping experience.</p>
</div>
</section>
</section>

<section class="end">
<h2>Let’s Build Your Dream Home Together!</h2>
<p>
Explore our collections, visit our showroom, or reach out to our friendly team we’re here to guide you every step of the way. Your perfect home starts with the right pieces, and we can’t wait to help you bring it to life.
</p>
<button class="end-button">Shop Now</button>
</section>
</body>
</html>
