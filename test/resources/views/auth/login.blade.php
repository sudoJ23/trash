<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('custom') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('custom') }}/css/index.css">
    <link rel="stylesheet" href="{{ asset('custom') }}/css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                            @if ($staff)
                                <form action="{{ route('auth.loginStaffRequest') }}" method="post">

                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username">
                                    </div>
                                    <div class="form-group mb-5">
                                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password">
                                    </div>
                            @else
                            <form action="{{ route('auth.loginRequest') }}" method="post">
                                <div class="form-group">
                                    @csrf
                                    <input type="text" name="nisn" class="form-control" value="{{ old('nisn') }}" placeholder="Nisn" maxlength="10">
                                </div>
                            @endif
                            <div class="form-group">
                                <input type="submit" value="Login" class="form-control btn btn-primary">
                                @if (session('status'))
                                <br>
                                <p>{{ session('status') }}</p>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('custom') }}/js/jquery.min.js"></script>
    <script src="{{ asset('custom') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('custom') }}/js/index.js"></script>
</body>
</html>
