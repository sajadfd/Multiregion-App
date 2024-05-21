<!DOCTYPE html>
<html>

<head>
    <title>О нас</title>
</head>

<body>
    <header>
        <h2>Выбранный город: <strong>{{ $city->name }}</strong></h2>
        <nav>
            <a href="/{{ $city->slug }}/about">О нас</a>
            <a href="/{{ $city->slug }}/news">Новости</a>
        </nav>
    </header>
    <h1>О нас</h1>
    <p>Lorem ipsum dolor sit amet...</p>
</body>

</html>