<h1>ANNONCE </h1>
<hr>
@foreach($products as $product)
    <p>{{ $product->name }}</p>
    <p>{{ $product->description }}</p>
    <p>{{ $product->created_at }}</p>
    <p>{{ $product->updated_at }}</p>
    <hr>
@endforeach