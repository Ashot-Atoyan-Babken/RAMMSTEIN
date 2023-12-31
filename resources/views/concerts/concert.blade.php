@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$tours->title}}</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1 class="text-white text-center text-uppercase my-5">{{$tours->title}}</h1>
        <div class="d-flex align-items-center flex-wrap justify-content-center">
        @foreach($concerts as $concert)
            <a href="{{route('photos',"id=$concert->id")}}" type="submit"
               style="text-decoration: none">
                <div class="card" style="width: 18rem;flex: 0 0 calc(33.33% - 10px); margin: 10px;">
                    <img src="{{asset('storage/' . $concert->tour_photo)}}" class="card-img-top"
                         style="height: 450px; object-fit: cover"
                         alt="{{$concert->title}}">
                    <div class="card-body text-white">
                        <p class="card-text">{{$concert->title}}</p>
                    </div>
                </div>

            </a>
        @endforeach
        </div>
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
</html>@endsection
