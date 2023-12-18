<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>All Products</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Weight</th>
                            <th>Manufacturer</th>
                            <th>Stock Quantity</th>
                            <th>SKU</th>
                            <th>Image URL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->ProductID }}</td>
                            <td>{{ $product->Name }}</td>
                            <td>{{ $product->Description }}</td>
                            <td>{{ $product->Price }}</td>
                            <td>{{ $product->Category }}</td>
                            <td>{{ $product->Weight }}</td>
                            <td>{{ $product->Manufacturer }}</td>
                            <td>{{ $product->{'Stock Quantity'} }}</td>
                            <td>{{ $product->SKU }}</td>
                            <td>{{ $product->ImageURL }}</td>
                            <td>
                            <a href="{{ route('products.edit', ['allProduct' => $product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
