<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
    .container {
        width: 70%;
        margin: auto;
        padding-top: 5rem;
        text-align: center;
    }

    .hello {
        padding-bottom: 5rem;
        font-size: 60px;
    }

    nav {
        height: 100px;
        display: flex;
        margin: auto;
        width: 60%;
        justify-content: space-between;
        align-items: center;
    }

    nav>a {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        color: gray;
    }

    a:hover {
        color: black;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('shop') }}">Shop</a>
            <a href="{{ route('info') }}">Info</a>
        </nav>
    </header>

    <div class="container">
        <div class="hello">
            {{$shop}}
        </div>


    </div>


</body>

</html>