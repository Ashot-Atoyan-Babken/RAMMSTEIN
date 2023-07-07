<!DOCTYPE html>
<html>
<head>
    <title>Navbar с логотипом и ссылками</title>
    <!-- Подключение стилей Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body style="background:black;">
<!-- Навигационное меню -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Логотип -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{asset('storage/images/'.'Rammstein_wallpaper_logo.png')}}" height="60" alt="Логотип">
            <p style="color: white;font-weight: 900;">RAMMSTEIN</p>
        </a>

        <!-- Кнопка для развертывания меню на мобильных устройствах -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Ссылки в меню -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Плейлист
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Альбом</a>
                        <a class="dropdown-item" href="#">Песни</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a  style="color: white" class="nav-link" href="#">Картинки</a>
                </li>

                <li class="nav-item">
                    <a style="color: white" class="nav-link" href="#">Тури</a>
                </li>
                <li class="nav-item">
                    <a style="color: white" class="nav-link" href="#">Контакти</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
@yield('content')
<div class="footer d-flex justify-content-between px-3 align-items-center">
    <div class="logo d-flex align-items-center">
        <img src="{{asset('storage/images/'.'Rammstein_wallpaper_logo.png')}}" height="60" alt="Логотип">
        <p style="color: white;font-weight: 900;">RAMMSTEIN</p>

    </div>
    <div  style="color: white" class="copywriter d-flex">
        &copy; 2023 Copywriter
        by Ashot
    </div>
</div>


<!-- Подключение скриптов Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
