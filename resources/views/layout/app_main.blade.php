<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/product.css")}}">
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
    <link rel="stylesheet" href="{{asset("css/recet.css")}}">
    <link rel="stylesheet" href="{{asset("css/coment.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="dark_side">
    <span>Темна версія</span>
    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
</div>
<div class="top_nav">
    <ul class="search">
        <li class="img">
            <a href="{{route("home")}}"><img src="https://ek.ua/img/svg/logo.svg" alt=""></a>
        </li>
        <li class="input"><input type="text" placeholder="Пошук товарів"> </li>
        <li class="button"><button>Знайти</button></li>
    </ul>
    <ul class="info">
        <li class="language"><span>укр</span> | <span>eng</span></li>
        <li class="icon"><span><i class="fa-solid fa-location-dot"></i></span>Хуст</li>
        <li class="icon"><span><i class="fa-solid fa-user"></i></span>Увійти</li>
    </ul>
</div>
<div class="menu">
    <ul>
        <li>Гаджети</li>
        <li>Комп'ютери</li>
        <li>Фото</li>
        <li>TV</li>
        <li>Аудіо</li>
        <li>Побутова техніка</li>
        <li>Клімат</li>
        <li>Будинок</li>
        <li>Дитячі товари</li>
        <li>Авто</li>
        <li>Інструментти</li>
        <li>Туризм</li>
        <li>Спорт</li>
        <li>Ще+</li>
    </ul>
</div>

@yield("content")

<div class="copy_info">
    <div class="img">
        {{--        <span><i class="fa-solid fa-basket-shopping"></i></span>--}}
        <img src="img/ek-bottom-icon-2.svg" alt="">
    </div>
    <div class="text">
        <p>E-Katalog — каталог описів і цін на побутову і комп'ютерну техніку, електроніку, товари для дому та офісу. Наше завдання — допомогти підібрати і купити
            потрібну модель за найкращою ціною в інтернет-магазинах. В каталозі можна знайти всю необхідну для вибору інформацію — порівняння товарів, підбір
            моделей за параметрами, детальні описи, пошук товару за назвою, відгуки користувачів, фотогалереї товарів, глосарій термінів, огляди, інструкції,
            рейтинг товарів, рекомендації експертів, каталог брендів і багато іншого. Передрук будь-яких матеріалів тільки за письмовою згодою редакції.</p>
    </div>
</div>
<div class="bottom_nav">
    <div class="container">
        <div class="about_project">
            <h4>Про проект</h4>
            <ul>
                <li>Як нам зателефонувати?</li>
                <li>Розміщення прайс-листів</li>
                <li>Конфіденційність</li>
                <li class="color">Запитання й побажання щодо сайту</li>
                <li>Популяризувати проєкт</li>
            </ul>
        </div>
        <div class="others_country">
            <h4>Ми в інших країнах</h4>
            <ul>
                <li>Україна</li>
                <li>Велика Британія</li>
                <li>США</li>
                <li>Польща</li>
                <li>Казахстан</li>
            </ul>
        </div>
        <div class="social">
            <h4>Слідкуйте за нами в додатках і соцмережах</h4>
            <ul>
                <li class="border"><span><i class="fa-brands fa-google-play"></i></span>Play Market</li>
                <li class="border"><span><i class="fa-brands fa-apple"></i></span>App Store</li>
                <li class="none"><span><i class="fa-brands fa-youtube"></i></span></li>
                <li class="none"><span><i class="fa-brands fa-facebook-square"></i></span></li>
                <li class="none"><span><i class="fa-brands fa-instagram"></i></span></li>
            </ul>
        </div>
    </div>
    <em><span><i class="fa-solid fa-spell-check"></i></span>Знайшли помилку на цій сторінці? Виділіть її та натисніть Ctrl+Enter</em>
</div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
</body>
</html>
