@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">

    <title>Pictures</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1 class="text-white text-center text-uppercase my-5">Галерея</h1>
        <section class="content">
            <section class="content__gallery gallery">
                <div class="gallery__items">
                    <div class="gallery__item gallery__item_big">
                        <img src="{{asset('storage/images/img/Рок-группа Rammstein Фото на Айфон.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/4e5dfb01-c77e-44c6-8a22-c464b8fb1798.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/624a739b-984e-4716-bc89-6222500da0b5.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/183c7f07-3bfd-4723-9e2c-13362656917e.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/914a39dd-eed1-48be-9b67-95e5233b16f6.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/145180.jpg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/5584098c-55f8-49de-8e84-5d1cd7f64b60.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item gallery__item_big">
                        <img src="{{asset('storage/images/img/b09eed4a-f320-4add-9704-9cf38472a3d0.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/b607f5a1-212f-4a30-8360-fe4105088883.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/d8e5cbaa-1258-40fb-a584-caa556739b9b.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item gallery__item_big">
                        <img src="{{asset('storage/images/img/Rammstein en México 2022.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/Ultimate Rammstein Fan Site.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/wallpaperflare.com_wallpaper (1).jpg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/URFS Christoph Schneider.jpeg')}}" alt="">
                    </div>
                    <div class="gallery__item ">
                        <img src="{{asset('storage/images/img/ff945b31-c06b-4724-8bfa-c920fa9e68ef.jpeg')}}" alt="">
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>
</body>
<script>
    let pixels = document.querySelector('.pixels')
    document.onmousemove = function () {
        document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeend', '<img src = "{{asset('storage/main/img/svg/'.'380px-Rammstein_logo_2.svg')}}" id = "heart" > ')
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
