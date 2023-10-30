<a href="{{ route('product.show', $product) }}">
    <img src="{{ asset('images/product/' . $product->image1) }}" alt="{{ $product->name }}">
    {{ $product->name }}
</a>