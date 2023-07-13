@extends('layout.navbar')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>написать отзыв</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1 class="text-white text-center text-uppercase my-5">написать отзыв</h1>
            <form action="{{route('feedback.send')}}" method="post">
                @csrf
                <div class="mb-3 text-center">
                    <label for="exampleFormControlTextarea1" class="form-label">отзыв</label>
                    <textarea class="form-control w-50 mx-auto mb-3" id="exampleFormControlTextarea1" placeholder="Ваш отзыв" name="content" cols="30" rows="5"></textarea>
                    <input type="hidden" value="{{$auth}}" name="user_id">
                    <button class="btn btn-info mt-5">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</body>
@if(session('success'))
<div class="alert alert-success w-25 mx-auto">
    {{ session('success')}}
</div>
@endif
@endsection
