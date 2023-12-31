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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{$albums->title}}</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1 class="text-white text-center my-5">{{$albums->title}}</h1>
        <table id="musicTable" class="text-white table table-hover text-nowrap mx-auto w-75">
            <thead>
            <tr class="text-center">
                <th>Альбом</th>
                <th>Название</th>
                <th>Плеер</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($songs as $index => $music)
                <tr class="text-center">
                    <td><img style="width: 50px; height: 50px" src="{{asset('storage/'.$albums->main_image)}}" alt="">
                    </td>
                    <td>{{ $music['title'] }}</td>
                    <td>
                        <audio id="audio{{ $index }}" src="{{ asset('storage/'. $music['song_name']) }}"></audio>
                        <button style="cursor: pointer"
                                onclick="toggleAudio('audio{{ $index }}', this)">
                            <div><i class="fa fa-play"></i></div>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    function toggleAudio(audioId, button) {
        let audio = document.getElementById(audioId);

        if (audio.paused) {
            playAudio(audio, button);
        } else {
            pauseAudio(audio, button);
        }
    }

    function playAudio(audio, button) {
        let audioElements = document.getElementsByTagName('audio');

        for (let i = 0; i < audioElements.length; i++) {
            if (audioElements[i] !== audio) {
                pauseAudio(audioElements[i], null);
            }
        }

        audio.play();
        button.innerHTML = `<i class="fa fa-pause"></i>`;
    }

    function pauseAudio(audio, button) {
        audio.pause();
        if (button) {
            button.innerHTML = `<i class="fa fa-play"></i>`;
        }
    }
</script>

</html>
@endsection
