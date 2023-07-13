@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1 class="text-white text-center text-uppercase my-5">Отзывы</h1>
        <section class="comment-list">
            @foreach($feedback as $content)
                <div class="comment-text w-50 mx-auto text-white mb-5" style="border-bottom: 1px solid #ffffff;">
                    <span class="username">
                    <h5 class="text-capitalize">{{$content->user->name}}</h5>
                      <span class="text-muted float-right">{{$content->DateAsCarbon->diffForHumans()}}</span>
                    </span>
                    {{$content->content}}
                </div>
            @endforeach
            <div class="d-flex justify-content-center">{{$feedback->links()}}</div>
        </section>
    </div>
</div>
</body>
</html>
@endsection
