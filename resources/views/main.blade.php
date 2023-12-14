<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/main.css') }}">
    <script src="{{ asset('storage/js/main.js') }}"></script>
</head>
<body>
    <div class="container">
        <img class="avatar" src="{{ asset('storage/images/avatar.jpg') }}" onclick="toggleMenu()">

        <div id="profile-menu">
            <a href="/profile">Мой профиль</a>
            <a href="/characters">Персонажи</a>
            <a href="/parties">Партии</a>
            <a href="/help">Справка</a>
            <a href="#" onclick="toggleMenu()">Закрыть</a>
        </div>

        <div class="content">
            <h1>Добро пожаловать в нашу онлайн игру!</h1>
            <p>Это веб-сайт, позволяющий людям играть онлайн в ДнД и другие настольные игры любой редакции. Здесь вы можете создать своего уникального персонажа, присоединиться к партии и начать приключение!</p>
        </div>
    </div>
</body>
</html>
