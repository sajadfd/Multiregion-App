<!DOCTYPE html>
<html>
<head>
    <title>Города</title>
</head>
<body>
    <h1>Выберите город</h1>
    <ul>
        @foreach ($cities as $city)
            <li><a href="/{{ $city->slug }}">{{ $city->name }}</a></li>
        @endforeach
    </ul>
</body>
</html>
