<h2>Search Results</h2>

@if($results->isEmpty())
    <p>No products found.</p>
@else
    <ul>
        @foreach($results as $product)
            <li>{{ $product->name }} - £{{ $product->price }}</li>
        @endforeach
    </ul>
@endif
