<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic - Decks</title>
</head>
<body>
    @foreach ($decks as $deck)
        <h2>{{ $deck->name }}</h2>
    @endforeach
</body>
</html>