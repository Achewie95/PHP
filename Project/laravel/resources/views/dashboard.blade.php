<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Dashboard</h2>
                @if(request()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ request()->get('success') }}
                    </div>
                @endif
                <p>Session started by: {{ session('name') }}</p>
                <a href="{{ url('api/allProducts') }}" class="btn btn-primary">Show All Products</a>
                <br>
                <br>
                <a href="{{ url('api/products/create') }}" class="btn btn-success">Add a Product</a>
            </div>
        </div>
    </div>
</body>
</html>
