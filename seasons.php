<?php require 'db.php';  ?>

<?php $season = get_season_by_id($_GET['id']);
$picters = explode(",", $season["link_to_picture"]);
$episodes = explode(",", $season["link_to_episode"]);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header style="background-image: url(<?php echo $picters[0]; ?>);" class="page-header">
        <nav class="menu">
            <button class="menu__btn"></button>
            <div class="menu-container">
            <a class="page-logo" href="index.php"><img src="images/header-logo.png" alt=""></a>
            <ul class="menu__list">
                <li class="menu__list-item">
                    <a class = "menu__list-link <?php if($_GET['id']==1) echo "menu__list-link--active"?>" href="seasons.php?id=1">1 сезон</a>
                </li>
    
                <li class="menu__list-item">
                    <a class = "menu__list-link <?php if($_GET['id']==2) echo "menu__list-link--active"?>" href="seasons.php?id=2">2 сезон</a>
                </li>
    
                <li class="menu__list-item">
                    <a class = "menu__list-link <?php if($_GET['id']==3) echo "menu__list-link--active"?>" href="seasons.php?id=3">3 сезон</a>
                </li>
    
                <li class="menu__list-item">
                    <a class = "menu__list-link <?php if($_GET['id']==4) echo "menu__list-link--active"?>" href="seasons.php?id=4">4 сезон</a>
                </li>
    
                <li class="menu__list-item">
                    <a class = "menu__list-link <?php if($_GET['id']==5) echo "menu__list-link--active"?>" href="seasons.php?id=5">5 сезон</a>
                </li>
    
                <li class="menu__list-item">
                    <a class = "menu__list-link <?php if($_GET['id']==6) echo "menu__list-link--active"?>" href="seasons.php?id=6">6 сезон</a>
                </li>
            </ul>
        </div>
        </nav>
        <div class="season-info">
            <div class="season-info__num">
                0<?php echo $season["number_of_season"] ?>
                <span>сезон</span>
            </div>
            <div class="season-info__text">
             <?php echo $season["text"] ?>
            </div>
        </div>
    </header> 

    <section class="seasone section-page">
        <div class="container">
            <h3 class="title">
                Все серии <?php echo $season["number_of_season"] ?> сезона
            </h3>
            <ol class="seasons__inner">
                <?php
                for($i=1; $i<=$season["number_of_episodes"]; $i++) { ?>

                <li class="seasons__item" style="background-image: url('<?php echo $picters[$i]; ?>');">
                    <a data-fancybox="gallery" href="<?php echo $episodes[$i-1]; ?>" class="seasons__link">Смотреть</a>
                </li>

                <?php } ?>

            </ol>
        </div>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>