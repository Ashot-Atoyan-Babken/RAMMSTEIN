@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kонтакты</title>
</head>

<body>
<div class="wrapper">
    <div class="container text-center">
        <h1 class="text-white text-center text-uppercase my-5">контакты</h1>
        <div class="mb-2">
            <a style="text-decoration: none;color: white; font-size: 18px;"
               href="https://www.instagram.com/this_is_ashot/" target="_blank">
                <i class="fa fa-instagram" style="color: #ffffff;"></i> <span class="ml-3">Instagram</span>
            </a>
        </div>
        <div class="mb-3">
            <a style="text-decoration: none;color: white; font-size: 18px;"
               href="https://www.facebook.com/ashot.atoyan.545/?locale=ru_RU" target="_blank">
                <i class="fa fa-facebook" style="color: #ffffff;"></i> <span class="ml-3">Facebook</span>
            </a>
        </div>
        <div>
            <a href="{{route('feedback')}}">
                <button class="btn btn-info">Оставить отзив</button>
            </a>
        </div>
    </div>
</div>
</body>
<script>
    let pixels = document.querySelector('.pixels')
    document.onmousemove = function () {
        document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeend', '<img src = "{{asset('
      storage / main / img / svg / '.'
      380 px - Rammstein_logo_2.svg ')}}" id = "heart" > ')
        let heart = document.querySelector('#heart');
        heart.style.position = "fixed";
        document.onmousemove = function (event) {
            heart.style.left = event.clientX + 20 + 'px';
            heart.style.top = event.clientY + 20 + 'px';
            pixels.innerHTML = event.clientX + 'px' + ' ' + event.clientY + 'px'
        }
    }
</script>

</html>
@endsection
