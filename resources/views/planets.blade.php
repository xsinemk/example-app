<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planeten</title>
</head>
<body>

<h1>Planeten</h1>

@foreach ($planeten as $planeet)
    <h2>
        <a href="/planets/{{ strtolower($planeet['name']) }}">
            {{ $planeet['name'] }}
        </a>
    </h2>

    <p>{{ $planeet['description'] }}</p>
@endforeach

</body>
</html>
