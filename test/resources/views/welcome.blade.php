<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi</title>

    <link rel="stylesheet" href="{{ asset('custom') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('custom') }}/css/index.css">
</head>
<body>

    <div class="kepala">
        @if (auth('petugas')->user())
        <a href="auth/logout" class="tombol pojokkanan">Logout</a>
        @else
        <a href="auth/login" class="tombol pojokkanan">Login</a>
        @endif
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center ditengah">Hi! {{ auth('petugas')->user()->nama_petugas }}</h1>
                    <h1 class="text-center">{{ auth('petugas')->user()->username }}</h1>
                    <h1 class="text-center">{{ auth('petugas')->user()->level }}</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('custom') }}/js/jquery.min.js"></script>
    <script src="{{ asset('custom') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('custom') }}/js/index.js"></script>
</body>
</html>
