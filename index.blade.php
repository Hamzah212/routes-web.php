<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <a href="/planets/{{ strtolower($planet['name']) }}">
                    <strong>{{ $planet['name'] }}</strong>
                </a>
                <p>{{ $planet['description'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
