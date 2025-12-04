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
            color: #66423e; }

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

        .CheckoutPage{
            padding-left: 100px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .FirstRow{
            display: flex;
            padding-top: 25px;
            gap:100px
            
        }
        .contactInfo, .orderSummary, .locationInfo {
           
            color: #22070f;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: #ced0d4;
            padding: 20px 20px;
            
        }
        #checkout{
            padding-left: 40px;
            border: #000000 5px solid;
        }

        .CheckoutPage input,.CheckoutPage select{
            min-height: 40px;
            min-width: 600px;
            max-width: 600px;
            border: #66423e 2px solid;
            border-radius: 10px;
        }
        .orderSummary{
            display: flex;
            flex-direction: column;
            padding: 20px;
            width: 300px;
            max-height: 150px;
            margin-top: 100px;
        }
        
        #title,#TotalAmount, #subtotal {
            font-weight: bolder;
            color: rgb(57, 43, 30);

        }
        #title{
            text-decoration: underline;
        }
        .TotalAmount, .subtotal, .OrderTitle{
            display: flex;
            justify-content: space-between;
        }
        .locationInfo{
            width: 150%;
            max-width: 640px;
        }
        #checkOut{
        margin-top: 10px;
        color: white;
        background-color:#F57C00 ;
        font-size: 14px;
        border: none;
        padding: 10px;
        border-radius: 999px;
        width: 250px;
        cursor: pointer;
        margin-left: 30px;
        }
        #checkOut:hover{
              background: #ea580c;

        }

        .rightSide{
            display: flex;
            flex-direction: column;
        }

        .paymentSection {
    margin-top: 20px;
    background-color: #ced0d4;
    border-radius: 10px;
    padding: 20px;
    max-width: 640px;
    color: #22070f;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.payment-icons {
    font-size: 24px;
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.payment-row {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.payment-row .field {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.BasketSummary{
    
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
<div class="CheckoutPage">

    <div class="FirstRow">
        <div class="contactInfo">
        <h4 id="title">Contact information: </h4>

        <p>Email Address:</p>
        <input type="text" id="Email" placeholder="Type in your Email Address" required>

        <p>Name title:</p>
        <select id="titleDropDown">
        <option hidden value="">Input your Title</option>
        <option value="volvo">Mr</option>
        <option value="volvo">Mrs</option>
        <option value="volvo">Miss</option>
         <option value="volvo">Ms</option>
        </select>

        <p>First Name:</p>
        <input type="text" id="firstName" placeholder="Type in your First Name" required>

        <p>Last Name:</p>
        <input type="text" id="LastName" placeholder="Type in your Last Name" required>

        <p>Mobile Number</p>
        <input type="text" id="MobileNumber" placeholder="Type in your Mobile Number" required>

        </div>
        <div class="rightSide">
        <div class="orderSummary">
        <div class="OrderTitle">
        <h4 class="title">Your Order:</h4>
        <h4 class="title" id="ItemNumbers">2 Items</h4>
        </div>
        <div class="subtotal">
        <p>Subtotal:</p>
        <p id="subtotal">£250</p>
        </div> 
        <div class="TotalAmount">
        <p>Total amount:</p>
        <p id="TotalAmount">£250</p>
        </div>
        </div>
        <div class="Checkout">
    <button id="checkOut">Checkout</button>
    </div>

        </div>

    </div>
    <div class="locationInfo">
    <h4 id="title">Location Address:</h4>
    <p>House Number: </p>
    <input type="text" id="HouseNumber" placeholder="Type in your House Number" required>
    <p>Street/Road Name: </p>
    <input type="text" id="RoadName" placeholder="Type in your Street Name" required>
    <p>Input your county: </p>
    <input type="text" id="County" placeholder="Type in your county" required>
    <p>Postcode: </p>
    <input type="text" id="PostCode" placeholder="Type in your Post code" required>
    </div>

    <div class="paymentSection">
    <h4 id="title">Payment Method:</h4>

    <p>Accepted Cards:</p>
    <div class="payment-icons">
        <i class="fa-brands fa-cc-visa"></i>
        <i class="fa-brands fa-cc-mastercard"></i>
        <i class="fa-brands fa-cc-amex"></i>
        <i class="fa-brands fa-cc-discover"></i>
    </div>

    <p>Name on Card:</p>
    <input type="text" id="cardName" placeholder="Name on card" required>

    <p>Card Number:</p>
    <input type="text" id="cardNumber" placeholder="1111 2222 3333 4444" required>

    <div class="payment-row">
        <div class="field">
            <p>Exp Month:</p>
            <input type="text" id="expMonth" placeholder="09" required>
        </div>
        <div class="field">
            <p>Exp Year:</p>
            <input type="text" id="expYear" placeholder="2028" required>
        </div>
        <div class="field">
            <p>CVV:</p>
            <input type="text" id="cvv" placeholder="123" required>
        </div>
    </div>
</div>

</div>

</body>
</html>