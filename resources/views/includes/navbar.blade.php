<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            padding-top: 70px; 
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            margin-right: auto; 
        }
        .navbar-nav .nav-item {
            margin-left: 20px;
        }
 
        .centered-text {
            text-align: left;
            position: relative;
            margin-top: 50px; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('profil') }}"><i class="fas fa-user-circle"></i></a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item {{ Request::is('shop') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('shop') }}"><i class="fas fa-store"></i> Shop</a>
                    </li>
                    <li class="nav-item {{ Request::is('cart') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i> Cart</a>
                    </li>
                    <li class="nav-item {{ Request::is('checkout') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('checkout') }}"><i class="fas fa-credit-card"></i> Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
</body>
</html>
