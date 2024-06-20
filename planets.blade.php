<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    @if(count($planets) > 0)
        <ul>
            @foreach ($planets as $planet)
                <li>
                    <strong>{{ $planet['name'] }}</strong>
                    <p>{{ $planet['description'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No planets found.</p>
    @endif
</body>
</html>
