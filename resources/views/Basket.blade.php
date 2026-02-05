@extends('layouts.app')

@section('title', 'Basket')

@section('content')

<style>
:root {
    --hd-orange: #F57C00;
    --hd-orange-brown: #E67E22;
    --hd-dark-red: #B03A2E;
    --hd-black: #000000;
    --hd-grey: #333333;
    --hd-text-muted: #6b7280;
}

#Checkout {
    color: white;
    background-color: #F57C00;
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

#title {
    padding-bottom: 20px;
    justify-content: center;
    padding-top: 20px;
    background-color: #806c58;
    margin-bottom: 40px;
    text-align: center;
    color: white;
}

.BasketContainer {
    display: flex;
    justify-content: space-between;
    padding-left: 30px;
    padding-top: 20px;
    font-weight: bolder;
    gap: 100px;
}

.ProductInfo {
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

.ProductName {
    flex: 1;
    margin: 0;
    font-weight: bolder;
    font-size: 1.3rem;
    color: #ffffff;
    margin-top: 5px;
}

#BasketImg {
    width: 150px;
    flex-shrink: 0;
    padding-left: 15px;
    padding-top: 15px;
}

.summary {
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

.ProductDetails {
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

#BasketTitle {
    margin-left: 30px;
}

.priceInformation {
    display: flex;
    padding-left: 75px;
}

.price {
    margin: 8px 0 97px;
}

#priceTitle {
    margin: 8px;
    font-weight: bolder;
    color: #f1efde;
}

.summary p {
    color: #f1efde;
}

.total {
    display: flex;
    justify-content: space-between;
}

#totalPrice {
    color: #f9f7e5;
}

.BasketItems {
    display: flex;
    flex-direction: column;
}
</style>

<h2 id="title">Your Trolley</h2>
<h2 id="BasketTitle">Your Items ({{ count($basketProducts) }})</h2>

<div class="BasketContainer">
    <div class="BasketItems">
        @foreach ($basketProducts as $product)
            <div class="ProductInfo">
                <img id="BasketImg" src="{{ asset($product->url) }}" alt="ProductImage">

                <div class="ProductName">
                    <p>{{ $product->name }}</p>
                </div>

                <div class="ProductDetails">
                    <div class="priceInformation">
                        <p id="priceTitle">Price: </p>
                        <p class="price">{{ $product->price }}</p>
                    </div>

                    <div class="controls-row">
                        <span class="qty-label">Quantity:</span>

                        <form method="POST" action="{{ route('updateQuantity.updateQuantity', ['bid' => $product->id]) }}">
                            @csrf
                            <select name="quantity" id="quantity" onchange="this.form.submit()">
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ $product->quantity == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </form>

                        <form method="POST" action="{{ route('removeProduct.removeProduct', ['bid' => $product->id]) }}">
                            @csrf
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

        <form method="POST" action="{{ route('checkout') }}">
            @csrf
            <button id="Checkout">Place Order</button>
        </form>
    </div>
</div>

@endsection