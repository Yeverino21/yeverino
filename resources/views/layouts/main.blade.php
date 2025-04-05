resources/views/layouts/main.blade.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('superheroes.index') }}">SuperHeroes</a>
            <a href="{{ route('genders.index') }}">Genders</a>
            <a href="{{ route('universes.index') }}">Universes</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Laravel App</p>
    </footer>
</body>
</html>