<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Ons Restaurant</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav class="navbar">
    <a href="{{ route('home') }}" class="nav-brand">Ons Restaurant</a>
    <div class="nav-links">
        <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('menu.index') }}" class="nav-link {{ Route::is('menu.index') ? 'active' : '' }}">Menu</a>
        <a href="{{ route('contact.index') }}" class="nav-link {{ Route::is('contact.*') ? 'active' : '' }}">Contact</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    &copy; {{ date('Y') }} Ons Restaurant
</footer>
</body>
</html>
