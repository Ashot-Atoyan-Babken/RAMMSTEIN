<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
</head>
<body style="background:#000;">
<div class="wrapper">
    <div class="container">
        <nav>
            <div class="d-flex align-items-center justify-content-between">
                <div class="ml-3">
                    <img src="{{asset('storage/images/'.'Rammstein_wallpaper_logo.png')}}" height="60" alt="Логотип">
                </div>
                <div>
                    <nav class="navbar">
                        <div class="burger" onclick="toggleMenu()">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="menu">
                            <li><a href="{{route('main.index')}}">Главное</a></li>
                            <li><a href="{{route('playlist')}}">Плейлист</a></li>
                            <li><a href="{{route('pictures')}}">Галерея</a></li>
                            <li><a href="{{route('tours')}}">туры</a></li>
                            <li><a href="{{route('contacts')}}">контакты</a></li>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</div>

@yield('content')

<div class="wrapper">
    <div class="container">
        <div class="footer d-flex justify-content-between px-3 align-items-center my-4">
            <div class="foot logo d-flex align-items-center">
                <a href="https://www.instagram.com/rammsteinofficial/" target="_blank"><img
                        src="{{asset('storage/images/'.'Rammstein_wallpaper_logo.png')}}" height="60" alt="Логотип">
                </a>
                <p style="color: white;font-weight: 900;">RAMMSTEIN</p>

            </div>
            <div style="color: white" class="copywriter d-flex">
                &copy; 2023 Copywriter
                <a class="ml-5" href="https://www.instagram.com/this_is_ashot/" target="_blank">by Ashot</a>
            </div>
        </div>
    </div>
</div>


<!-- Подключение скриптов Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    function toggleMenu() {
        let menu = document.querySelector('.menu');
        menu.classList.toggle('active');
    }
</script>

</body>
</html>
