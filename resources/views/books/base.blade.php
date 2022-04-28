<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('style.css'); }} ">
    <title>Book | @yield('title')</title>
</head>
<body>
    <div class="hd">
        <nav>
            <a href="/books">Home</a>
            <a href="/create">Add new</a>
        </nav>
    </div>

    @section('body')
    @show
    
</body>
</html>