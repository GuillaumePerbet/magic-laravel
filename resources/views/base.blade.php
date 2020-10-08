<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Laravel</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="/deck">Les decks</a></li>
            <li><a href="/deck/create">Ajouter un deck</a></li>
        </ul>
    </header>

    @yield('content')
</body>
</html>