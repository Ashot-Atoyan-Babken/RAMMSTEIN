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
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="shortcut icon" href="{{asset('storage/images/Rammstein_wallpaper_logo.png')}}" type="image/x-icon">

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
                    <div class="carousel-item ">
                        <img src="{{asset('storage/main/img/1.jpg')}}" class="d-block w-100 cii" alt="Image 1"
                             style="height:620px">
                    </div>
                    <div class="carousel-item active">
                        <img src="{{asset('storage/main/img/2.png')}}" class="d-block w-100 cii" alt="Image 2"
                             style="height:620px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/main/img/3.jpg')}}" class="d-block w-100 cii" alt="Image 3"
                             style="height:620px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/main/img/4.jpg')}}" class="d-block w-100 cii" alt="Image 4"
                             style="height:620px">
                    </div>
                </div>
            </div>
            <div class="mx-auto text-center mt-3">
                <a href="#" class="scroll"
                   style="color:white;font-size:15px;text-decoration: none; transition: all 1s ease-in-out;"><h1>
                        More</h1>
                    <img src="{{asset('storage/main/img/svg/free_icon_1.svg')}}"
                         style="width: 30px; height: 30px;transform: rotate(90deg)" alt=""></a>
            </div>
        </div>
    </div>
    <div class="container" style="border: 2px solid #ffffff; margin-top: 150px; margin-bottom: 10px;"></div>
    <div class="wrapper">
        <div class="container text-white">
            <h1 class="text-center">Предыстория группы</h1>
            <div class="first d-flex justify-content-center">
                <div class="first_text" style="color: white">
                    <p class="w-100 text-justify">Истоки Rammstein лежат в периоде, предшествовавшем и сопутствовавшем
                        объединению Германии.
                        Сооснователь группы и ведущий гитарист Рихард Круспе свою музыкальную карьеру начал в 1989 году
                        в Западной Германии в группе Orgasm Death Gimmick, переехав туда из Шверина ,
                        куда вернулся после падения Берлинской стены. Круспе, поклонник Kiss, искал возможности
                        соединить любимый им хард-рок с электронным звучанием индастриала. Примерно в это время он
                        познакомился с Тиллем Линдеманном (в то время — барабанщиком панк-группы First Arsch), а позднее
                        с Оливером Риделем (бас-гитара) и Кристофом Шнайдером (ударные) из групп The Inchtabokatables и
                        Die Firma соответственно. В этом составе (с Линдеманном как вокалистом и сочинителем песен) они
                        стали играть под названием Rammstein.
                    </p>
                    <p class="w-100 text-justify">В 1993 году, когда у группы даже не было названия, она выиграла на
                        Берлинском рок-фестивале право
                        на запись в профессиональной студии. 19 февраля 1994 года Rammstein с песнями «Das alte
                        Leid», «Seemann», «Weißes Fleisch», «Rammstein», «Du Riechst So Gut» и «Schwarzes Glas»
                        вчетвером выиграли конкурс молодых групп в Берлине, получив право записи на профессиональной
                        студии. Годом позже к группе присоединился второй гитарист Пауль Ландерс, а затем и клавишник
                        Кристиан Лоренц, игравшие в панк-группе Feeling B. В таком составе и с продюсером Якобом
                        Хельнером был записан дебютный альбом Herzeleid. Все тексты в этом альбоме, как и в большинстве
                        последующих, написаны Линдеманном. После нескольких неудачных попыток написать тексты на
                        английском, как того требовал лейбл, Тилль настоял на том, чтобы писать песни на немецком.
                        Выпущенный на лейбле Motor Music, первый диск Rammstein завоевал широкую популярность.
                    </p>

                </div>
                <div class="first_img">
                    <img class="img_first" src="{{asset('storage/main/img/wp2879797-rammstein-wallpapers.jpg')}}"
                         alt="wp2879797-rammstein-wallpapers.jpg" style="width: 500px; height: 100%;">
                </div>
            </div>
            <p style="color: white" class="mt-5 text-justify">Rammstein заметил лидер Nine Inch Nails Трент Резнор,
                который порекомендовал две их песни для
                саундтрека к триллеру Дэвида Линча «Шоссе в никуда». Это принесло группе дополнительную
                известность. В 1995 году Rammstein совершили тур по Европе на разогреве у Clawfinger. На
                концертах Rammstein демонстрировали яркие пиротехнические шоу. В 1996 году Rammstein впервые
                выступили на телеканале MTV. Этот же телеканал долгое время отказывался транслировать
                видеоклипы группы. В том же году был выпущен новый сингл «Engel», к которому был снят клип,
                имевший успех. За ним вышел второй альбом группы, Sehnsucht, который почти сразу же приобретает
                статус платинового. К концу 1997 года был выпущен внеальбомный сингл «Das Modell» с
                кавер-версией одноимённой песни электронной группы Kraftwerk из альбома Die Mensch-Maschine.
                Группа пользуется большим успехом как в Германии, так и за её пределами. Несколько синглов
                Rammstein попадали в десятку лучших в Германии
            </p>
        </div>
    </div>
    <div class="container my-4" style="border: 2px solid #ffffff;"></div>
    <div class="wrapper">
        <div class="container text-white">
            <h1 class="text-center">Последующая карьера</h1>

            <div class="sec d-flex justify-content-center align-items-center">
                <div class="sec_img">
                    <img class="img_sec" src="{{asset('storage/main/img/wp2879754.jpg')}}" style="width: 500px;" alt="">
                </div>
                <div style="color: white">
                    <p class="text-justify w-100">Несколько лет фанаты ждали следующей студийной
                        работы группы. Такой большой перерыв породил
                        множество разных слухов, в основном о распаде группы. Однако в 2000 году Rammstein садятся в
                        студию записывать новый альбом. В 2001 году вышел третий студийный альбом под названием Mutter,
                        занявший 4-е место в рейтинге лучших индастриал-метал-альбомов по версии журнала Metal
                        Hammer[11]. Вскоре был проведён тур в его поддержку, после которого количество фанатов Rammstein
                        значительно увеличилось. Позже были выпущены синглы «Ich will», «Mutter», «Feuer frei!» и
                        видеоклипы к ним. В 2003 году, к десятилетию своего существования, Rammstein выпускают DVD
                        Lichtspielhaus c полным собранием клипов и несколькими концертными записями в хорошем
                        качестве.</p>
                    <p class="text-justify w-100">В начале 2004 года появилась достоверная информация о скором выходе
                        нового альбома. Через
                        несколько месяцев после этого вышли синглы «Mein Teil» и «Amerika». И, наконец, в начале осени
                        был выпущен четвёртый альбом, названный Reise, Reise, который очень отличается от стилистики
                        прошлых альбомов группы, что, однако, не помешало ему стать платиновым. Альбом немедленно был
                        сопровождён туром, в ходе которого выходит сингл с альбома — «Ohne dich». В туре в поддержку
                        альбома шоу лишилось многих спецэффектов (пластиковый фаллос, горящий плащ), но взамен приобрело
                        новые.</p>

                </div>
            </div>
            <div class="txt text-justify" style="color: white;">
                <p>В начале 2005 года последовал тур вместе с группой Apocalyptica, после
                    чего вышел сингл «Keine
                    Lust» и клип к нему. В сентябре выпускается клип, а затем и сингл «Benzin», одноимённая песня с
                    которого войдёт на следующий, пятый альбом группы. В следующем месяце выходит сам альбом,
                    получивший название Rosenrot, который содержал 7 старых треков, не вошедших в прошлые альбомы, и
                    4 новые композиции. В декабре последовал сингл «Rosenrot». В 2006 году вышел концертный DVD
                    Völkerball, запланированный ещё на 2004-й, но вышедший позднее. Диск получил в основном
                    положительные отзывы.</p>
            </div>

        </div>
    </div>
    <div class="container my-4" style="border: 2px solid #ffffff;"></div>
    <div class="wrapper">
        <h1 class="text-center text-white my-5">Состав</h1>
        <div class="cards container mb-4"
             style=" display: flex;  justify-content: space-evenly;  align-items: center;  margin: 0 auto">
            <div class="card card0">
                <div class="border">
                    <h2>Till Lindemann</h2>
                </div>
            </div>
            <div class="card card1">
                <div class="border">
                    <h2>richard kruspe</h2>
                </div>
            </div>
            <div class="card card2">
                <div class="border">
                    <h2>paul landers</h2>
                </div>
            </div>
        </div>
        <div class="cards container"
             style=" display: flex;  justify-content: space-evenly;  align-items: center;  margin: 0 auto">
            <div class="card card3">
                <div class="border">
                    <h2>oliver riedel</h2>
                </div>
            </div>
            <div class="card card4">
                <div class="border">
                    <h2>Christian Lorenz</h2>
                </div>
            </div>
            <div class="card card5">
                <div class="border">
                    <h2>christoph schneider</h2>
                </div>
            </div>
        </div>
    </div>
    <i class="fa-solid fa-user"></i>

</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 10000
        });
    });
    let button = document.querySelector(".scroll");

    // Добавляем обработчик события "click" на кнопку
    button.addEventListener("click", function () {
        // Определяем текущую позицию прокрутки
        var currentPosition = window.pageYOffset;

        // Определяем конечную позицию прокрутки
        var targetPosition = currentPosition + 900;

        // Запускаем анимацию прокрутки
        scrollToPosition(targetPosition);
    });

    // Функция для плавной прокрутки к указанной позиции
    function scrollToPosition(targetPosition) {
        // Определяем начальное время анимации
        var startTime = performance.now();

        // Определяем текущую позицию прокрутки
        var currentPosition = window.pageYOffset;

        // Вычисляем расстояние, которое нужно прокрутить
        var distance = targetPosition - currentPosition;

        // Запускаем анимацию с использованием requestAnimationFrame
        function animationStep(currentTime) {
            // Вычисляем прогресс анимации от 0 до 1
            var progress = (currentTime - startTime) / 3000; // Длительность анимации 500 миллисекунд

            // Ограничиваем прогресс до диапазона [0, 1]
            progress = Math.min(progress, 1);

            // Вычисляем новую позицию прокрутки
            var newPosition = currentPosition + (distance * progress);

            // Прокручиваем страницу к новой позиции
            window.scrollTo(0, newPosition);

            // Проверяем, достигли ли конечной позиции прокрутки
            if (progress < 1) {
                // Продолжаем анимацию
                requestAnimationFrame(animationStep);
            }
        }

        // Запускаем первый шаг анимации
        requestAnimationFrame(animationStep);
    }

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
@endsection()
