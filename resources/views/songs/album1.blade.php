@extends('layout.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="shortcut icon" href="{{asset('storage/images/favicon.svg')}}" type="image/x-icon">--}}

    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        @foreach($songs as $song)
            <audio style="display: none" class="aud"
                   src="{{asset('storage/'.$song->song_name)}}"></audio>
            <button data-id="{{$song->id}}" class="play" onclick="play(this)"><i class="fa fa-play"></i></button>
        @endforeach
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $('.play').on('click', function () {
        let butDat = $(this).data('id');
        let audio = $('audio');
        let audData = audio.attr('data-id', butDat);
        console.log(butDat, audData.data('id'))

    })

    function play(button) {
        // let butDat = document.querySelector(this).getAttribute('data-id')
        // let audDat = document.querySelector('.aud').getAttribute('data-id');

        // let item = button.parentNode;
        // let audioPlayer = item.querySelector('audio');
        // if (audioPlayer.paused && butDat == audDat) {
        //     audioPlayer.play()
        //     audioPlayer.innerHTML = `<i class="fa fa-pause"></i>`;
        // } else {
        //     audioPlayer.pause();
        //     audioPlayer.innerHTML = `<i class="fa fa-play"></i>`;
        // }
    }
</script>

</html>
@endsection
