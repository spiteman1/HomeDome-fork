<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite('resources/css/app.css')
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

.top-logo { display: flex;
align-items: center;
gap: 8px; }

.top-logo img { width: 44px;
height: 44px;
border-radius: 8px;
border: 2px solid #ffffff; }

.top-logo-text { font-weight: 800;
            font-size: 20px;
            color: #ffffff;
             text-decoration: none;}
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

.icon-badge-basket { background: #ffffff;
color: #B03A2E; }

.category-bar { background: var(--hd-orange-brown);
color: #ffffff;
font-size: 13px;
padding: 8px 40px;
display: flex;
justify-content: space-between;
align-items: center; }

.category-bar a { color: #ffffff;
text-decoration: none;
font-weight: 500;
white-space: nowrap; }

.category-bar a:hover { text-decoration: underline;}

.content { display: flex;
flex-wrap: wrap;
background: #ffffff;
min-height: calc(100vh - 70px);
align-items: stretch; }

.About-us{
    position: relative;
    text-align: left;
}
.About-us img {
    display: block;
    margin: auto;
    width: 96%;
    height: 500px;
    border-radius: 12px;
}
.About-us h1{
    position: absolute;
    top: 60px;
    left: 100px;
    color: white;
    font-size: 60px;
    font-weight: 900;
    text-shadow: 4px 4px 12px rgba(0,0,0,0.6);
    letter-spacing: 2px;
}
.Welcome{
    text-align: center;
    width: 80%;
    margin: 40px auto 50px auto;
}
.Welcome p{
    font-size: 24px;
    font-weight: 500;
    color:black;
    line-height: 1.7;
}
.us-info{
    width: 85%;
    margin: auto;
    line-height: 1.8;
}
h2{
    font-size: 38px;
    font-weight: 900;
    margin-bottom: 15px;
    color: black;
    text-align: center;
}
#p1 {
    width: 100%;
    background:var(--hd-orange);
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0px 4px 18px rgba(0,0,0,0.15);
    text-align: center;
    font-size: 20px;
    color:white;
    transition: 0.3s ease;
}
#p1:hover {
    transform: translateY(-15px);
}
h3{
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
    color:#B03A2E;
}
.card-section {
    width: 80%;
    margin: 30px auto;
}
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 30px;
    margin-top: 30px;
}
.card {
    background: white;
    padding: 25px;
    border-radius: 15px;
    border: 3px solid brown;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
    transition: 0.3s ease;
}
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.068);
}
.card h3 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 12px;
}
.card p {
    font-size: 17px;
    line-height: 1.6;
    color:black;
}
.our-story {
    width: 85%;
    margin: 48px auto;
    color: #222;
}
.our-story h2 {
    font-size: 34px;
    font-weight: 800;
    margin-bottom: 10px;
    color: black;
}
.our-story p {
    font-size: 17px;
    color:black;
    margin-bottom: 12px;
    line-height: 1.7;
    text-align: center;
}
.why-choose-us {
    width: 80%;
    margin: 56px auto;
    text-align: center;
}
.why-choose-us h2 {
    font-size: 34px;
    font-weight: 800;
    margin-bottom: 14px;
    color: var(--hd-black);
}
.qualities {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 20px;
    margin-top: 22px;
}
.quality {
    background:white;
    padding: 22px;
    border-radius: 12px;
    border: 3px solid brown;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.5);
    transition:.25s ease;
}
.quality:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.068);
}
.quality h3 {
    font-size: 20px;
    color: brown;
    margin-bottom: 8px;
}
.quality p {
    font-size: 17px;
    color: black;
    line-height: 1.6;
}

.end {
    width: 90%;
    margin: 60px auto 80px auto;
    padding: 44px;
    text-align: center;
    background:var(--hd-orange);
    color: white;
    border-radius: 16px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}
.end h2 {
    font-size: 34px;
    margin-bottom: 8px;
    font-weight: 900;
}
.end p {
    font-size: 18px;
    margin-bottom: 18px;
    color: white;
}
.end-button {
    background:white;
    color: brown;
    padding: 6px 20px;
    font-size: 16px;
    border-radius: 1000px;
    border-color: brown;
    cursor: pointer;
    transition: 0.3s ease;
}
.end-button:hover {
    transform: translateY(-5px);
}
.end h2{
    color: white;
}
footer {
    margin-top: auto;
    background:brown; 
    color: white;
    padding: 20px;
    text-align: center;
}
footer h4{
    font-size: 10px;
  }
.footer-col1{
    width: 15%;
    padding: 0 15px;
    text-align: left;
  }
.footer-col1 h5{
    position: relative;
    margin-bottom: 17px;
    font-size: 17px;
    font-weight: 350px;
  }
.footer-col1 a{
    color:white;
    font-size: 15px;
    text-decoration: none;
    font-weight: 100px;
  }
.footer-col1 a:hover {
    text-decoration: underline;
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
                <a href="/login"  class="icon-item">
                    <i class="fa-solid fa-user"></i>
                    <span>Account</span>
                </a>
                <a href="/wishlist"  class="icon-item">
                    <i class="fa-regular fa-heart"></i>
                    <span>Wishlist</span>
                    <span class="icon-badge wishlist">{{ $wishlistCount ?? 0 }}</span>
                </a>
                <a href="{{ route('Basket') }}"  class="icon-item">
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
        </div>
<br>
<div class="About-us">
<img src="{{ asset('images/furnture & appliances in a room.png')}}" alt= "About us banner">
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
<a href="{{route('home')}}"><button class="end-button">Shop Now</button></a>
</section>
<footer><h4>© 2025 HomeDome</h4>
    <div class="footer-col1">
        <h5>Useful links</h5>
        <a href="{{route('Contact-us')}}"><i>Contact Us</i></a>
        <br>
        <a href="{{route('About-Us')}}"><i>About Us</i></a>
    </div>
</footer>
</body>
</html>
