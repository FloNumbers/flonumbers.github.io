<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ secure_asset('css/app.css') }}>
    <title>Document</title>
</head>
<body>
    <ul class="nav_balk">
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/motivation">Mijn Motivatie</a></li>
        <li><a href="/beroepsbeeld">Beroepsbeeld</a></li>
        <li><a href="/crud">Crud Index</a></li>
        <!-- <li><a href="./easteregg/easteregg.html" id="easteregg">What's this?</a></li> -->
    </ul>
    @yield('content')
</body>
    <footer class="footer">
        <a href="sitemap.html">All pages</a>
    </footer>
</html>
