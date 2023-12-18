<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Product</h2>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="productID">Product ID</label>
                <input type="number" class="form-control" id="productID" name="productID" value="{{old("productID")}}" required>
            </div>
                <div>
                    @error('productID')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old("name")}}" required>
            </div>
                <div>
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old("description")}}" required>
            </div>
                <div>
                    @error('description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{old("price")}}" required>
            </div>
                <div>
                    @error('price')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Electronics">Electronics</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Home">Home</option>
                    <option value="Sports">Sports</option>
                    <option value="Outdoors">Outdoors</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" step="0.01" class="form-control" id="weight" name="weight" value="{{old("weight")}}" required>
            </div>
                <div>
                    @error('weight')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="supplier">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{old("manufacturer")}}" required>
            </div>
                <div>
                    @error('manufacturer')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="quantity">Stock Quantity</label>
                <input type="number" step="1" class="form-control" id="quantity" name="quantity" value="{{old("quantity")}}" required>
            </div>
                <div>
                    @error('quantity')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="quantity">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" value="{{old("sku")}}" required>
            </div>
                <div>
                    @error('sku')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <div class="form-group">
                <label for="quantity">Image URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{old("url")}}" required>
            </div>
                <div>
                    @error('url')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
        <br>

    </div>
</body>
</html>