<x-layout>
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
        <div>
            <img src="{{ asset('images/product/' . $product->image1) }}" alt="{{ $product->name }}" style='width:60%; height:auto'>
            <img src="{{ asset('images/product/' . $product->image2) }}" alt="{{ $product->name }}" style='width:60%; height:auto'>
        </div>

        <div>
            {!! $product->description !!}
            <p>&pound;{{ $product->price }}</p>
            <div style="border:1px solid #373737; padding:20px; border-radius:10px">
                <div>
                    <span>email</span><input type="email" style="width:100%">
                    <div>
                        <p>Description</p>
                        <textarea rows='7' style="width:100%"></textarea>
                    </div>
                    <div style="margin:0px auto;">
                        <button type="button" style="text-align: center;background-color:aquamarine;border-radius:4px">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>