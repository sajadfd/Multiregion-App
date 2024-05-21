<!DOCTYPE html>
<html>
<head>
    <title>{{ $city->name }}</title>
</head>
<body>
    <header>
        <h2>Выбранный город: <strong>{{ $city->name }}</strong></h2>
    </header>
    <h1>Выберите город</h1>
    <ul>
        @foreach ($cities as $item)
            <li>
                @if ($item->id === $city->id)
                    <strong>{{ $item->name }}</strong>
                @else
                    <a href="/{{ $item->slug }}">{{ $item->name }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
