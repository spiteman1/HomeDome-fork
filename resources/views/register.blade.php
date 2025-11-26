<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeDome – Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        .hero-title {
            font-size: 48px;
            font-weight: 900;
            letter-spacing: -0.03em;
            line-height: 1.1;
            display: block;
            white-space: nowrap;
            animation: fadeSlide 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(12px); }

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
                white-space: normal; }}
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
            <input class="top-search-input" type="text" placeholder="Search for products...">
            <button class="top-search-button">Search</button>
        </div>

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
            <a href="/cart" class="icon-item">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Basket</span>
                <span class="icon-badge basket">{{ $cartCount ?? 0 }}</span>
            </a>
        </div>

    </header>

    <div class="category-bar">
        <a href="/furniture">Furniture</a>
        <a href="/appliances">Appliances</a>
        <a href="/home-decor">Home Decor</a>
        <a href="/kitchen-ware">Kitchenware</a>
        <a href="/lighting">Lighting</a>
    </div>

    <main class="content">
        <section class="hero">
            <div class="hero-inner">

<h1 class="hero-title">
    Join us at HomeDome
</h1>
                <p class="hero-sub">
                    Sign up for a free HomeDome account — everything you need for your home.
                </p>
                <span class="hero-badge">Quick sign up | Protected with reCAPTCHA | Hassle free checkout</span>
            </div>
        </section>

    <section class="form-side">
        <div class="form-inner">
            <h2 class="form-heading">Create your HomeDome account</h2>
            <p class="form-sub">
                Enter your details to get started.
            </p>

            <form method="POST" action="#">
<!-- backend will later change action and add @csrf -->

                <div class="field">
                    <label for="name">Full name</label>
                    <input id="name" name="name" type="text" placeholder="Bob Smith" required>
                </div>

                <div class="field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" placeholder="you@example.com" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="**********" required>
                </div>

                <div class="field">
                    <label for="password_confirmation">Confirm password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="**********" required>
                </div>

                <div class="captcha-box">
                    reCAPTCHA v2 (“I’m not a robot”) will appear here.
                </div>

                <button type="submit" class="btn-primary">Create account</button>

                <p class="helper-text">
                    Already a HomeDome member?
                    <a href="/login">Log in</a>
                </p>
            </form>
          </div>
        </section>
    </main>
</div>
</body>
</html>
