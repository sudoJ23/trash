<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status</title>
</head>
<body>
    <center>
        <h5>{{ auth()->user()->id }}</h5>
        <h5>{{ auth()->user()->name }}</h5>
        <h5>{{ auth()->user()->level }}</h5>
        <h5>{{ auth()->user()->email }}</h5>
        <h5>Created at : {{ \Carbon\Carbon::parse(auth()->user()->created_at)->diffForHumans()  }}</h5>
        <h5>Updated at : {{ \Carbon\Carbon::parse(auth()->user()->updated_at)->diffForHumans()  }}</h5>
    </center>
</body>
</html>
