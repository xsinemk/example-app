<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $planet['name'] }}</title>
</head>
<body>

<h1>{{ $planet['name'] }}</h1>

<p>{{ $planet['description'] }}</p>

<a href="{{ route('home') }}">Terug naar home</a>

</body>
</html>
