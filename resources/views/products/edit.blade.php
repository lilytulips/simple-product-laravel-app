<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Product</h1>
        <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" value="{{old('name', $product->name)}}" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="rate">Price</label>
                <input type="number" value="{{old('price', $product->price)}}" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="content">Detail</label>
                <textarea class="form-control" id="detail" name="detail" rows="5" required>{{old('detail', $product->detail)}}</textarea>
            </div>
            <div class="form-check">
                <input type="hidden" name="is_published" value="0">
                <input class="form-check-input" type="checkbox" value="1" id="is_published" name="is_published" @checked(old('is_published', $product->is_published) == '1')>
                <label class="form-check-label" for="is_published">
                    Published
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>