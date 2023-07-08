@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlist</title>
</head>
<body>
<div class="wrapper" style="margin-top: 15vh;">
    <div class="container">
        <div class="d-flex align-items-center flex-wrap">
            @foreach($albums as $album)
                <a href="{{route('album1')}}" data-id="{{$album->id}}" style="text-decoration: none">
                    <div class="card" style="width: 18rem;flex: 0 0 calc(33.33% - 10px); margin: 10px;">
                        <img src="{{asset('storage/' . $album->main_image)}}" class="card-img-top"
                             style="height: 450px; object-fit: cover"
                             alt="{{$album->title}}">
                        <div class="card-body text-white">
                            <p class="card-text">{{$album->title}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
@endsection
