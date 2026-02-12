@vite('resources/css/app.css')
<style>
    :root {
        --hd-orange: #F57C00;
        --hd-orange-brown: #E67E22;
        --hd-dark-red: #B03A2E;
        --hd-black: #000000;
        --hd-grey: #333333;
        --hd-text-muted: #6b7280;
    }

    .page {
        width: 100%;
        height: 100%;
        margin: 0;
        border: none;
        border-radius: 0;
        box-shadow: none;
    }

    .top-bar {
        background: var(--hd-orange);
        padding: 12px 24px;
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .top-bar a {
        text-decoration: none;

    }

    .top-logo {
        display: flex;
        align-items: center;
        gap: 8px;
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
        position: relative;
    }

    .icon-item i {
        font-size: 20px;
        margin-bottom: 4px;
    }

    .icon-item:hover {
        opacity: 0.8;
    }

    .icon-badge {
        position: absolute;
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
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.25);
    }

    .icon-badge.wishlist {
        background: #ffffff;
        color: #B03A2E;
    }

    .icon-badge.basket {
        background: #ffffff;
        color: #B03A2E;
    }

    .category-bar {
        background: var(--hd-orange-brown);
        color: #ffffff;
        font-size: 13px;
        padding: 8px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .category-bar a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 500;
    }

    .category-bar a:hover {
        text-decoration: underline;
    }

    .content {
        display: flex;
        flex-wrap: wrap;
        background: #ffffff;
        min-height: calc(100vh - 70px);
        align-items: stretch;
    }

    .hero {
        flex: 1 1 45%;
        position: relative;
        padding: 40px 32px;
        overflow: hidden;
        background: linear-gradient(135deg, var(--hd-orange) 0%, var(--hd-orange-brown) 55%, var(--hd-dark-red) 100%);
        color: #ffffff;
        display: flex;
        align-items: center;
    }

    .hero::before {
        content: "";
        position: absolute;
        inset: -40px -60px auto;
        background-image: url('{{ asset('images/homedome-logo.png') }}');
        background-repeat: no-repeat;
        background-position: top left;
        background-size: 260px 260px;
        filter: blur(6px);
        opacity: 0.25;
        z-index: 0;
    }

    .hero-inner {
        position: relative;
        z-index: 1;
    }

    .hero-title {
        font-size: 48px;
        font-weight: 900;
        letter-spacing: -0.03em;
        line-height: 1.1;
        display: block;
        white-space: nowrap;
        animation: fadeSlide 0.8s ease-out forwards;
        opacity: 0;
        transform: translateY(12px);
    }

    @keyframes fadeSlide {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-sub {
        margin-top: 10px;
        font-size: 16px;
        max-width: 320px;
    }


    .hero-badge {
        margin-top: 20px;
        display: inline-block;
        padding: 8px 16px;
        border-radius: 999px;
        background: rgba(0, 0, 0, 0.16);
        font-size: 13px;
    }

    .form-side {
        flex: 1 1 55%;
        padding: 32px 40px 36px;
        display: flex;
        align-items: center;
    }

    .form-inner {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
    }

    .form-heading {
        font-size: 22px;
        margin-bottom: 4px;
        color: var(--hd-black);
    }

    .form-sub {
        font-size: 13px;
        color: var(--hd-text-muted);
        margin-bottom: 16px;
    }

    .field {
        margin-bottom: 12px;
    }

    .field label {
        display: block;
        font-size: 13px;
        margin-bottom: 4px;
        color: #374151;
    }

    .field input {
        width: 100%;
        padding: 10px 11px;
        border-radius: 10px;
        border: 1px solid #d1d5db;
        font-size: 14px;
    }

    .field input::placeholder {
        color: #9ca3af;
    }

    .field input:focus {
        outline: none;
        border-color: var(--hd-orange);
        box-shadow: 0 0 0 1px rgba(245, 124, 0, 0.25);
    }

    .row-between {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        margin-bottom: 10px;
    }

    .checkbox {
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    .checkbox input {
        width: 14px;
        height: 14px;
        accent-color: var(--hd-orange);
    }

    .link-inline {
        color: var(--hd-dark-red);
        font-weight: 500;
        text-decoration: none;
    }

    .link-inline:hover {
        text-decoration: underline;
    }

    .captcha-box {
        margin: 10px 0 6px;
        padding: 10px;
        border-radius: 10px;
        border: 1px dashed #d1d5db;
        font-size: 12px;
        text-align: center;
        color: var(--hd-text-muted);
    }

    .btn-primary {
        width: 100%;
        border: none;
        border-radius: 999px;
        padding: 10px;
        background: var(--hd-dark-red);
        color: #ffffff;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        box-shadow: 0 12px 36px rgba(176, 58, 46, 0.5);
    }

    .btn-primary:hover {
        background: #8b241b;
    }

    .helper-text {
        margin-top: 10px;
        font-size: 12px;
        text-align: center;
        color: var(--hd-text-muted);
    }

    .helper-text a {
        color: var(--hd-dark-red);
        text-decoration: none;
        font-weight: 600;
    }

    .helper-text a:hover {
        text-decoration: underline;
    }


    @media (max-width: 900px) {

        .content {
            flex-direction: column;
            align-items: stretch;
        }

        .hero {
            order: -1;
        }

        .form-side {
            padding-top: 24px;
            padding-bottom: 32px;
        }
    }

    @media (max-width: 600px) {

        .page {
            margin-top: 10px;
            border-radius: 0;
        }

        .top-bar {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .top-search {
            width: 100%;
        }

        .form-side {
            padding-inline: 20px;
        }

        .hero {
            padding-inline: 20px;
        }

        .hero-title {
            font-size: 32px;
            white-space: normal;
        }
}


    .filter {
        color: white;
        margin-left: 50px;
    }

    .account-menu {
        position: relative;
    }

    .account-trigger {
        cursor: default;
    }

    .account-menu::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        height: 14px;
    }

    .account-dropdown {
        position: absolute;
        top: 100%;
        right: -110px;
        width: 220px;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        box-shadow: 0 14px 40px rgba(0,0,0,0.18);
        padding: 8px;
        z-index: 9999;
        display: none;

        transform: translateY(10px);
    }

    .account-menu:hover .account-dropdown {
        display: block;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
        padding: 10px 10px;
        border-radius: 10px;
        text-decoration: none;
        color: #111827;
        font-size: 13px;
        font-weight: 600;
    }

    .dropdown-item i {
        font-size: 14px;
        color: var(--hd-dark-red);
    }

    .dropdown-item:hover {
        background: #f3f4f6;
    }

    .dropdown-divider {
        height: 1px;
        background: #e5e7eb;
        margin: 8px 6px;
    }

    .dropdown-item-btn {
        background: none;
        border: none;
        cursor: pointer;
        font-family: inherit;
        text-align: left;
    }

details > summary {
  list-style: none;
  cursor: pointer;
  padding: 10px 20px;
  color:white;

  display: inline-block;
  font-weight: bold;
}


.filter-dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  position: absolute;
  top: 100%;
  left: 0;
  background: #F57C00;
  border: 1px solid #ccc;
  padding: 15px;
  width: 200px;
  box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
  z-index: 10;
  color:;
}


.dropdown-content label {
  display: block;
  margin-bottom: 8px;
  cursor: pointer;
  color:white;
}
</style>

    <div class="page">

        <header class="top-bar">

            <div class="top-logo">
                <a href="/"><img src="{{ asset('images/homeDomeLogo.png') }}" alt="HomeDome logo"></a>
                <a href="/"><span class="top-logo-text">HomeDome</span></a>
            </div>



            <div class="top-search">
                <input id="searchInput" value="{{ request('query') }}" class="top-search-input" type="text" placeholder="Search for products...">
                <button id="searchButton" class="top-search-button">
                    Search
                </button>




       <details class="filter-dropdown">
           <summary>
               <i class="fa-solid fa-filter fa-2xs"></i>
               <span>Filter</span>
           </summary>

           <div class="dropdown-content">
               <form id="filterForm">

                   <h4>By Price</h4>
                   <label><input type="radio" name="price" value="0-50"> Under £50</label>
                   <label><input type="radio" name="price" value="50-100"> £50 - £100</label>
                   <label><input type="radio" name="price" value="100-200"> £100 - £200</label>
                   <label><input type="radio" name="price" value="200-300"> £200 - £300</label>
                   <label><input type="radio" name="price" value="300+"> £300+</label>

                   <h4>By Category</h4>
                   <label><input type="radio" name="category" value="Furniture"> Furniture</label>
                   <label><input type="radio" name="category" value="Appliances"> Appliances</label>
                   <label><input type="radio" name="category" value="Home Decor"> Home Decor</label>
                   <label><input type="radio" name="category" value="Kitchen Ware"> Kitchenware</label>
                   <label><input type="radio" name="category" value="Lighting"> Lighting</label>

                   <button type="submit" id="FilterButton">Apply</button>
               </form>
           </div>
       </details>

       <script>
           document.getElementById('FilterButton').addEventListener('click', function(event) {

               event.preventDefault();


               const searchInput = document.getElementById('searchInput');
               const priceEl = document.querySelector('input[name="price"]:checked');
               const categoryEl = document.querySelector('input[name="category"]:checked');


               const query = searchInput ? searchInput.value.trim() : '';
               const priceVal = priceEl ? priceEl.value : '';
               const catVal = categoryEl ? categoryEl.value : '';

               if (!query && !priceVal && !catVal) {
                   alert('Please select a filter or enter a search term!');
                   return;
               }


               const params = new URLSearchParams();
               if (query) params.append('query', query);
               if (categoryEl) params.append('catVal', catVal);
               if (priceEl) params.append('priceVal', priceVal);


               window.location.href = `/filter?${params.toString()}`;
           });
       </script>

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


@auth
    <div class="account-menu">
        <div class="icon-item account-trigger">
            <i class="fa-solid fa-user"></i>
            <span>Hello, {{ Auth::user()->name }}</span>
        </div>

        <div class="account-dropdown">
            @if (Auth::user()->is_admin)
                <a class="dropdown-item" href="/admin/create">
                    <i class="fa-solid fa-user-shield"></i>
                    <span>Create admin account</span>
                </a>

                <a class="dropdown-item" href="/admin/customers">
                    <i class="fa-solid fa-users"></i>
                    <span>Customer management</span>
                </a>

                <a class="dropdown-item" href="/admin/change-password">
                    <i class="fa-solid fa-key"></i>
                    <span>Change password</span>
                </a>

                <a class="dropdown-item" href="#">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span>Inventory</span>
                </a>

                <a class="dropdown-item" href="#">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>Orders</span>
                </a>
            @else

                <a class="dropdown-item" href="/customer/change-password">
                    <i class="fa-solid fa-key"></i>
                    <span>Change password</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>Orders</span>
                </a>
            @endif

            <div class="dropdown-divider"></div>

            <form action="{{ route('logout') }}" method="POST" style="margin:0;">
                @csrf
                <button type="submit" class="dropdown-item dropdown-item-btn">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>
@endauth

@guest
    <div class="account-menu">
        <div class="icon-item account-trigger">
            <i class="fa-solid fa-user"></i>
            <span>Account</span>
        </div>

        <div class="account-dropdown">
            <a class="dropdown-item" href="/login">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Login</span>
            </a>

            <a class="dropdown-item" href="/register">
                <i class="fa-solid fa-user-plus"></i>
                <span>Register</span>
            </a>
        </div>
    </div>
@endguest

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
