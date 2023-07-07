@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Rammstein</title>
</head>
<body>
<main>
    <div class="wrapper">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" style="border-radius: 15px">
                    <div class="carousel-item active">
                        <img src="{{asset('storage/main/img/1.jpg')}}" class="d-block w-100" alt="Image 1"
                             style="height:620px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/main/img/2.png')}}" class="d-block w-100" alt="Image 2"
                             style="height:620px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/main/img/3.jpg')}}" class="d-block w-100" alt="Image 3"
                             style="height:620px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/main/img/4.jpg')}}" class="d-block w-100" alt="Image 4"
                             style="height:620px">
                    </div>
                </div>
            </div>
<div class="mx-auto text-center mt-3">
    <a href="#" style="color:white;font-size:15px">More</a>
    <img src="" alt="">
</div>
        </div>
    </div>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        // Автоматическое движение карусели через каждые 3 секунды
        $('.carousel').carousel({
            interval: 10000
        });
    });
</script>
</html>
@endsection()
