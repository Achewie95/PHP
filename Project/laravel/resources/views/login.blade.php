<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username / Email</label>
                                <input type="text" id="login" name="login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div>
                            Need to sign up? <a href="{{ route('register') }}"> Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>       
            <div>
                @if($errors)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                    {{$error}}
                    </div>
                    @endforeach
                @endif
            </div>  
    </div>
</body>
</html>
