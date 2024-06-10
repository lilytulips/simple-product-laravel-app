<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Detail</th>
                    <th>Publish</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->detail }}</td>
                        <td class="text-center">
                            @if ($product->is_published)
                                Yes 
                            @else
                                No        
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-sm btn-info">Show</a>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>