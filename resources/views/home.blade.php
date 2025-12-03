@extends('layouts.app')

@section('title', 'HomeDome home')

@section('content')


<div class="welcome-banner">
        <h1>Welcome to the home of home products</h1>
</div>
<div class= product_showing>
<h2> Liven up your living room with our furniture  </h2>
</div>
    <div class="product-container"  >
        @for ($i=0;$i<3;$i++)
            <div class="product-card">
                <h3>{{ $products[$i]->name }}</h3>

                @if($products[$i]->url)
                    <a href="{{ route('product.show', ['id' => $products[$i]->product_id]) }}">
                    <img src="{{ asset( $products[$i]->url) }}" alt="{{ $products[$i]->name }}">
                    </a>
                @endif

                <p>£{{ number_format($products[$i]->price, 2) }}</p>
            </div>
        @endfor
    </div>

<div class= product_showing>
<h2> We take appliances seriously  </h2>
</div>
    <div class="product-container">
        @for ($i=6;$i<9;$i++)
            <div class="product-card">
                <h3>{{ $products[$i]->name }}</h3>

                @if($products[$i]->url)

                    <a href="{{ route('product.show', ['id' => $products[$i]->product_id]) }}">
                                       <img src="{{ asset( $products[$i]->url) }}" alt="{{ $products[$i]->name }}">
                                       </a>
                @endif

                <p>£{{ number_format($products[$i]->price, 2) }}</p>
            </div>
        @endfor
    </div>

<div class= product_showing>
<h2> We put the home in home decor </h2>
</div>
 <div class="product-container">
        @for ($i=11;$i<14;$i++)
            <div class="product-card">
                <h3>{{ $products[$i]->name }}</h3>

                @if($products[$i]->url)

                     <a href="{{ route('product.show', ['id' => $products[$i]->product_id]) }}">
                                        <img src="{{ asset( $products[$i]->url) }}" alt="{{ $products[$i]->name }}">
                                        </a>
                @endif

                <p>£{{ number_format($products[$i]->price, 2) }}</p>
            </div>
        @endfor
    </div>

<div class= product_showing>
<h2> Our kitchenware is affordable and built to last </h2>
</div>
 <div class="product-container">
        @for ($i=16;$i<19;$i++)
            <div class="product-card">
                <h3>{{ $products[$i]->name }}</h3>

                @if($products[$i]->url)

                     <a href="{{ route('product.show', ['id' => $products[$i]->product_id]) }}">
                                        <img src="{{ asset( $products[$i]->url) }}" alt="{{ $products[$i]->name }}">
                                        </a>
                @endif

                <p>£{{ number_format($products[$i]->price, 2) }}</p>
            </div>
        @endfor
    </div>

<div class= product_showing>
<h2> Make your world brighter with our lighting options </h2>
</div>
 <div class="product-container">
        @for ($i=21;$i<24;$i++)
            <div class="product-card">
                <h3>{{ $products[$i]->name }}</h3>

                @if($products[$i]->url)

                     <a href="{{ route('product.show', ['id' => $products[$i]->product_id]) }}">
                                        <img src="{{ asset( $products[$i]->url) }}" alt="{{ $products[$i]->name }}">
                                        </a>
                @endif

                <p>£{{ number_format($products[$i]->price, 2) }}</p>
            </div>
        @endfor
    </div>




@endsection
