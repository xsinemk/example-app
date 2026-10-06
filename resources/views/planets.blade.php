<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planeten</title>
</head>
<body>

<h1>Planeten</h1>

@foreach ($planeten as $planeet)
    <h2>{{ $planeet['name'] }}</h2>
    <p>{{ $planeet['description'] }}</p>
@endforeach

</body>
</html>
