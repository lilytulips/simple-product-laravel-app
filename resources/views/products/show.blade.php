<!DOCTYPE html>
<html>
<head>
    <title>Show Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
    <h1 class="mt-5">Show Product</h1>
        <p>Name: {{ $product->name }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Detail: {{ $product->detail }}</p>
        <p>Published: {{ $product->is_published ? 'Yes' : 'No' }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>
</body>
</html>