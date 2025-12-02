<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeDome – Login</title>
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
           background: #fff7ed;
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
             /*Page CSS*/
       #Checkout{   /*Checkout Button*/
    color: white;
    background-color:#F57C00 ;
    font-size: 14px;
    border: none;
    padding: 10px;
    border-radius: 999px;
    width: 250px;
        cursor: pointer;
}      
#Checkout:hover {
  background: #ea580c;
}

    #title{
        padding-bottom: 20px;
        justify-content: center;
        padding-top: 20px;
        background-color: #806c58;
        margin-bottom: 40px;
        text-align: center;
        color: white;
    }
    .BasketContainer{
        display: flex;
        justify-content: space-between;
        padding-left: 30px;
        padding-top: 20px;
        font-weight: bolder;
        gap: 100px;
    }
    .ProductInfo{
        background-color: #6e5b3b;
        width: 750px;
         max-height: 200px;
        display: flex;
    align-items: flex-start;
    gap: 16px;
    color: white;
    padding: 20px 30px;
    padding-right: 40px;
    flex: 1 1 1900px;
    min-width: 500px;
    max-width: 1000px;
    border-left: 4px #E67E22 solid;
    border-right: 4px #E67E22 solid;
    border-bottom: 4px #E67E22 solid;
    border-top: 4px #E67E22 solid;

    }

    #delete {
    padding: 8px 12px;
    border-radius: 6px;
    border: 1px solid #F57C00;
    background-color: #F57C00;
    color: #ffffff;
    cursor: pointer;
}
#delete:hover {
  background: #ea580c;
}
.ProductName{
    flex:1;
    margin: 0;
    font-weight: bolder;
    font-size: 1.3rem;
    color: #ffffff;
    margin-top: 5px;
}
    
    #BasketImg{
          width: 150px;
  flex-shrink: 0; 
  padding-left: 15px;
  padding-top: 15px;
    }

    .summary{
        height: 300px;
        background-color: #584b37;
        padding-top: 20px;
        padding: 30px;
        margin-right: 40px;
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        color: white;
        flex: 0.1 1 400px;   
    border-radius: 20px;
    }
    .ProductDetails{
            text-align: right;
    flex-shrink: 0;
    }

.rightText{
        text-align: right;
    flex-shrink: 0;

}

.controls-row {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: flex-end;
}
.qty-label {
    font-size: 0.9rem;
    color: #fef3c7;
    
}
    select {
    padding: 8px 10px;
    border-radius: 6px;
    border: 1px solid #d1d5db;
    background: #ffffff;
    cursor: pointer;
}
#quantity {
    padding: 6px 10px;
    border-radius: 999px;
    border: 1px solid #e5e7eb;
    background: #ffffff;
    cursor: pointer;
}

#BasketTitle{
margin-left: 30px;
}
.priceInformation{
    display: flex;
    padding-left: 75px;
}
.price {
    margin: 8px 0 97px;
}
#priceTitle{
    margin: 8px;
    font-weight: bolder;
        color: #f1efde;
}
.summary p{
            color: #f1efde;
}
.Subtotal, .total, .delivery{
    display: flex;
    justify-content: space-between;
}
#SubtotalPrice, #deliveryPrice, #totalPrice{
color: #f9f7e5;
}
.BasketItems{
    display: flex;
    flex-direction: column;
}
    </style>
</head>
<body>
<div class="page">

    <header class="top-bar">
        <div class="top-logo">
            <img src="{{ asset('images/homedome-logo.png') }}" alt="HomeDome logo">
            <span class="top-logo-text">HomeDome</span>
        </div>

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
                <!--Add the cart number after html and css is finished-->
               <!-- <span class="icon-badge basket">{{ $cartCount ?? 0 }}</span> -->
            </a>
        </div>

    </header>
    
    <div class="category-bar">
        <a href="/furniture">Furniture</a>
        <a href="/appliances">Appliances</a>
        <a href="/home-decor">Home Decor</a>
        <a href="/kitchen-ware">Kitchen Ware</a>
        <a href="/lighting">Lighting</a>
    </div>
</div>

<h2 id="title">Your Trolley</h2>
<h2 id="BasketTitle">Your Items ({{ count($basketProducts) }})</h2>
<!--Add in something that says your items and then it also calculates how many items there are-->

<div class="BasketContainer">
    <div class="BasketItems">
@foreach ($basketProducts as $product)
<div class="ProductInfo">
    <img id= "BasketImg" src="{{ asset($product->url) }}" alt="ProductImage">
    
    <div class="ProductName">
    <p>{{ $product->name }}</p>
    </div>
<!--Add in the colour of what we have selected-->
    <div class="ProductDetails">

        <div class="priceInformation">
            <p id="priceTitle">Price: </p>           
            <p class="price">{{ $product->price }}</p>

        </div>

        <div class="controls-row">
            <span class="qty-label">Quantity:</span>
        <select name="quantity" id="quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <!--id is the shopping basket id-->
        <form method ="POST" action="{{ route('removeProduct.removeProduct', ['bid' => $product->id]) }}">
            <button id="delete">Delete</button>
        </form>
    </div>
</div>
</div>
@endforeach


</div>
<div class="summary">
    <div class="total">
        <p id="totalLabel">Total:</p>
        <p id="totalPrice">
            £{{ number_format($basketProducts->sum(fn($p) => $p->price * $p->quantity), 2) }}
        </p>
    </div>
    <!--Here the price without delivery will be displayed
    <div class="delivery">
    <p id="deliveryLabel">Estimated delivery cost:</p>
    <p id="deliveryPrice"> £25</p>
</div>-->

    <!--Here the delivery price will be displayed
    <div class="total">
    <p id="totalLabel">Total Price:</p>
    <p id="totalPrice">£252.39</p>
    </div>-->
    <!--Here the total price will be displayed-->
    <button id="Checkout">Go to Checkout</button>
</div>
</div>
<div class="footer">
    
</div>
</body>
</html>