<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout Page</title>
<style>
       body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #f5ebe0;
}

header {
    background: #74462e;
    color: #fff;
    padding: 18px 40px;
    font-size: 25px;
    font-weight: bold;
}

.container {
    display: flex;
    gap: 40px;
    padding: 40px;
}

.CheckOutDetails, .ItemsSummary {
    background: #fffaf3;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgb(0,0,0);
}

.CheckOutDetails {
    flex: 2;
}

.ItemsSummary {
    flex: 1;
    height: fit-content;
}
.section-title {
    font-size: 25px;
    font-weight: bolder;
    margin-bottom: 20px;
    color: #804729;    
}

.product {
    display: flex;
    gap: 20px;
    padding: 15px 0px;
    border-bottom: 1px solid #e5d3c5;
}

.product img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 8px;
}

.product-details {
    flex: 1;
}

.product-name {
    font-weight: bold;
    margin-bottom: 5px;
    color: #3b2a20;
}

.product-price {
    font-weight: bold;
    color: #c26a2e;
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
}

#DescriptionTitle {
    margin-bottom: 5px;
    color: #6b3e26;
    font-weight: bold;
}

input {
    padding: 12px;
    border: 1px solid #d6bfa9;
    border-radius: 6px;
    background: #fff;
}
.summary-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    color: #3b2a20;    
}

.summary-row p{
    margin: 0;
}

.total {
    font-weight: bold;
    font-size: 20px;
}

.checkout-btn {
    width: 100%;
    padding: 15px;
    background: #c78355;
    color: white;
    border: none;
    font-size: 16px;
    font-weight: bolder;
    margin-top: 20px;
    border-radius: 8px;
}

.checkout-btn:hover {
    background: #a35421;
}
</style>
</head>

<body>
<header>CHECKOUT</header>

<div class="container">

    <div class="CheckOutDetails">
        <div class="PersonalDetails">
        <div class="section-title">Delivery Details</div>
            <form id = "deliveryForm" method = "post" action = "{{ route('checkout.submit', ['id' => $orderedInformation->orderID]) }}">
                <div class="form-group">
                    <p id="DescriptionTitle">Full Name</p>
                    <input id="name" type="text">
                </div>

                <div class="form-group">
                    <p id="DescriptionTitle">Email</p>
                    <input id="email" type="email">
                 </div>

                <div class="form-group">
                    <p id="DescriptionTitle">Phone Number</p>
                    <input id="phoneNumber" type="email" placeholder="Optional">
                </div>

                <div class="form-group">
                    <p id="DescriptionTitle">Street</p>
                    <input id="street" type="text">
                </div>

                <div class="form-group">
                    <p id="DescriptionTitle">City</p>
                    <input id="city" type="text">
                </div>

                <div class="form-group">
                    <p id="DescriptionTitle">Post Code</p>
                    <input id="postcode" type="text">
                </div>

                <button class="checkout-btn">Submit Order</button>
            </form>
        </div>
    </div>

    <div class="ItemsSummary">
        <div class="section-title">Your Bag</div>
            @foreach($orderedProducts as $product){
                <div class="product">
                    @if(isset($product['media']) && count($product['media']) > 0){
                        <img src="{{ asset($product['media'][0]['url']) }}">
                    }
                    @endif 
                    <div class="product-details">
                        <div class="product-name">{{ $product['name'] }}</div>
                        <div>Quantity: {{ $product['quantity'] }}</div>
                        <div class="product-price">{{ $product['price'] }}</div>
                    </div>
                </div>
            }


        <div class="summary-row">
            <p>Subtotal</p>
            <p>{{ $orderedInformation->subtotal }}</p>
        </div>

        <div class="summary-row">
            <p>Delivery</p>
            <p>£3.99</p>
        </div>

        <div class="summary-row total">
            <p>Total</p>
            <p>£{{ $orderedInformation->subtotal + 3.99 }}</p>
        </div>
    </div>
</div>
</body>
</html>
