<?php require 'db.php';  ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="js/fm.revealator.jquery.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/fm.revealator.jquery.min.js"></script>
</head>
<body>
<header class="header">
    <nav class="menu">
        <button class="menu__btn"></button>
        <ul class="menu__list">
            <li class="menu__list-item">
                <a class = "menu__list-link" href="seasons.php?id=1">1 сезон</a>
            </li>

            <li class="menu__list-item">
                <a class = "menu__list-link" href="seasons.php?id=2">2 сезон</a>
            </li>

            <li class="menu__list-item">
                <a class = "menu__list-link" href="seasons.php?id=3">3 сезон</a>
            </li>

            <li class="menu__list-item">
                <a class = "menu__list-link" href="seasons.php?id=4">4 сезон</a>
            </li>

            <li class="menu__list-item">
                <a class = "menu__list-link" href="seasons.php?id=5">5 сезон</a>
            </li>

            <li class="menu__list-item">
                <a class = "menu__list-link" href="seasons.php?id=6">6 сезон</a>
            </li>
        </ul>
    </nav>
    <div class="logo">
        <img class="logo-img" src="images/logo.png" alt="Логотип">
    </div>
</header>

    
    <section class="about section-page">
    <div class="container">
        <h3 class="title">
            О сериале
         </h3>
         <div class="about__inner">
            <ul class="about__info">
                <li class="about__info-item revealator-slideup revealator-delay1 revealator-once">Жанр
                    <span>Историческая драма</span>
                </li>
                <li class="about__info-item revealator-slideup revealator-delay1 revealator-once">
                    Сезонов
                    <span>6</span>
                </li>
                <li class="about__info-item revealator-slideup revealator-delay1 revealator-once">
                    Длительность серии
                    <span>45 минут</span>                    
                </li>
                <li class="about__info-item revealator-slideup revealator-delay1 revealator-once">
                    На экранах
                    <span>С 3 марта 2013 по сей день</span>
                </li>
            </ul>
                <div class="about__text">
                    <p class="revealator-slideup revealator-delay1 revealator-once">
                        Викинги – шикарный исторический сериал, один из лучших в своем жанре, шоу может похвастаться огромной фан-базой, а также тем, что пробудил интерес к истории и возродил моду на викингов.
                        </p>
                        <p class="revealator-slideup revealator-delay1 revealator-once">
                        «Викинги» созданы по заказу канала американского канала History, однако работали над ним канадцы и ирландцы. Сериал поражает масштабными сценами сражений, добротным и глубоким сценарием, а также максимальным вниманием к исторической эпохи. Авторы сериала потратили кучу времени и денег (бюджет первого сезона - $40 млн, дальше суммы возросли) на то, чтобы викинги и их современники выглядели в шоу так, какими они был в свое время – VIII – IX веках нашей эры. С другой стороны –  отсутствие точных исторических фактов и (полу)легендарность многих событий позволили авторам сериала вольную трактовку многих событий.
                    </p>
                </div>
         </div>
    </div>
</section>

<section class="video">
    <div class="container">
        <h3 class="video__text">
            <span>The Storm</span>
            Is Coming...
        </h3>
        <a class="video__btn" data-fancybox href="https://www.youtube.com/watch?v=1YVxm0GKhkM&t=38s&ab_channel=MikeUnknow">Посмотреть трейлер сериала</a>
    </div>
</section>

<section class="seasone section-page">
    <div class="container">
        <h3 class="title">
            Все сезоны
        </h3>
        <ol class="seasons__inner">
        <?php
            $season = get_seasons();
            $i = 1; 
            foreach($season as $seas){
            global $i;
            ?>
            <li class="seasons__item" style="background-image: url('images/seasons_image<?php echo $i ?>.jpg');">
            <a href="seasons.php?id=<?php echo $i?>" class="seasons__link">Смотреть</a>
            </li>

            <?php $i=$i+1; } ?>
        </ol>
    </div>
</section>

<section class="heroes section-page">
    <div class="container">
        <h3 class="title">Главные герои</h3>
        <div class="heroes__inner">
            <div class="heroes-slider-img revealator-zoomin revealator-delay revealator-once revealator-below">
                <img class="heroes__images" src="images/hero1.jpg" alt="">
                <img class="heroes__images" src="images/lagerta.jpg" alt="">
                <img class="heroes__images" src="images/floki.jpg" alt="">
            </div>
            <div class="heroes-slider-text revealator-zoomin revealator-delay revealator-once revealator-below">
                <div class="heroes__text">
                    <h4 class="heroes__name">Рагнар</h4>
                    <p>Рагна́р Лодбро́к (др.-сканд. Ragnarr Loðbrók) - полулегендарный скандинавский конунг из рода Инглингов, ключевой персонаж сериала.
                    </p>
                    <p>Умелый воин и амбициозный вождь, Рагнар на протяжении почти всей своей жизни следует пути викинга. Рассекая море в поисках боевой славы и наживы, он стремится обрести новые знания, открыть неизвестные земли и изменить нелегкую судьбу своего народа, живущего в суровых условиях Скандинавского полуострова</p>

                </div>
                <div class="heroes__text">
                    <h4 class="heroes__name">Лагерта</h4>
                    <p>Лаге́рта (или Хладге́рда, др.-сканд. Hlaðgerðr, лат. Ladgerda, Ladgertha или Lagertha; в сериале также носит псевдоним Ингстад) - известная скандинавская воительница, упомянутая в хрониках Саксона Грамматика.
                    </p>
                    <p>Эта отважная и независимая женщина способна проявлять железную решимость, когда дело касается ее личного достоинства, семьи или власти. Лагерта также известна своим милосердием и благородством.</p>

                </div>
                <div class="heroes__text">
                    <h4 class="heroes__name">Флоки</h4>
                    <p>Флоки – «безумный гений», строитель кораблей для военных походов в сериале «Викинги».
                    </p>
                    <p>В сериале «Викинги» Флоки – один из ярких персонажей. Друг лидера викингов Рагнара Лодброка – искусный корабельщик, участвующий вместе с соотечественниками в варварских набегах на Европу Герой считает себя потомком бога Локи, свято верит в правдивость видений, которые часто его накрывают. Персонаж стал ярким примером верной дружбы, способности прощать недостатки близкого человека и идти за ним хоть на край света.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p class="copy">
            Сериал «Викинги». Правами на сериал владеет канал History.
        </p>
    </div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>