<!DOCTYPE html>

<html lang="ru">

<head>
 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="plugins.js" type="text/javascript"></script>
    <script src="scripts.js" type="text/javascript"></script>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"
        type="text/javascript">
    </script>

</head>
<body>
    <header class="header <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'transparent' : 'white'?>" id="header">
        <div class="main_container">
            <div class="header__btn"></div>
            <a href="<?php echo $_SERVER['REQUEST_URI'] == '/' ? '' : '/'?>" class="header__logo"></a>
            <div class="header__right">
                <nav class="header__menu">
                    <a href="#!" class="header__menu__link">О проекте</a>
                    <a href="#!" class="header__menu__link">Квартиры</a>
                    <a href="#!" class="header__menu__link">Ход строительства</a>
                    <a href="#!" class="header__menu__link">Как купить</a>
                    <div href="#!" class="header__menu__more">
                        <span>Еще</span>
                        <div class="header__menu__submenu">
                            <a href="#!" class="header__menu__link">Новости</a>
                            <a href="#!" class="header__menu__link">О компании</a>
                            <a href="#!" class="header__menu__link">Контакты</a>
                        </div>
                    </div>
                </nav>
                <div class="footer__social__container">
                    <a href="#!" class="footer__social fb"></a>
                    <a href="#!" class="footer__social vk"></a>
                    <a href="#!" class="footer__social inst"></a>
                </div>
                <div class="header__info">
                    <a class="header__tel" href="tel:+7 (347) 293-53-93">+7 (347) 293-53-93</a>
                    <div class="header__popup"  data-popup="popup__call">Заказать звонок</div>
                </div>   
            </div>
            <a tel="tel:+7 (347) 293-53-93" class="header__mobile__tel"></a>
        </div>
    </header>
    <div class="menu__mobile">
        <nav class="menu__mobile__list">
            <a href="#!" class="menu__mobile__link">О проекте</a>
            <a href="#!" class="menu__mobile__link">Квартиры</a>
            <a href="#!" class="menu__mobile__link">Ход строительства</a>
            <a href="#!" class="menu__mobile__link">способы покупки</a>
            <a href="#!" class="menu__mobile__link">Новости и акции</a>
            <a href="#!" class="menu__mobile__link">Контакты</a>
            <a href="#!" class="menu__mobile__link">О компании</a>
        </nav>
        <div class="menu__mobile__bottom">
            <div class="header__info">
                <a class="header__tel" href="tel:+7 (347) 293-53-93">+7 (347) 293-53-93</a>
                <div class="header__popup" data-popup="popup__call">Заказать звонок</div>
            </div>  
        </div>
    </div>
    <main>