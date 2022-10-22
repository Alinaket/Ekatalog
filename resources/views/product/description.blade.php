aww wow o<!doctype html>
<html lang="en">
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
<div class="content">
    <div class="content_product">
        <div class="product">
            <div class="text">
                <div class="title">
                    <em><span>Каталог</span>/<span>Аудіотехніка</span>/<span>Навушники</span>/<span>Hator</span>/</em>
                    <h1>{{$product["name"]}} <span><i class="fa-solid fa-link"></i></span></h1>
                </div>
            </div>
            <div class="info">
                <ul class="info_product">
                    <li>ДЕ КУПИТИ <span>32</span></li>
                    <li>ОПИС <span></span></li>
                    <li>ВІДГУКИ <span>16</span></li>
                    <li class="active">ОБГОВОРЕННЯ <span>5</span></li>
                    <li>КОРИСНЕ <span>1</span></li>
                </ul>
            </div>
            <div class="container">
                <div class="img_product">
                    <div class="title">
                        <img  src="{{$product["img"]}}" alt="">
                        <div class="description">
                            <em>Відео <span>5</span> Фото <span>16</span></em>
                        </div>
                    </div>
                    <div class="img">
                        <ul>
                            <li><img src="https://mzimg.com/120/31/gho6sbucw31.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/s1/gho6shmbvs1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/c1/gho6shz1bc1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/i1/gho6sie80i1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/s1/gho6siz1bs1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/v1/gho6saisdv1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/n1/gho6sk4jpn1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/d1/gho6skfled1.jpg" alt=""></li>
                            <li></li>
                            <li><img src="https://mzimg.com/120/j1/gho6sl42mj1.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/71/gho6sj4wt71.jpg" alt=""></li>
                            <li><img src="https://mzimg.com/120/d1/gho6sjq75d1.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="price">
                    <div class="title_price">
                        <h2>від <span>{{$product["price"]}}</span> до <span>2499</span> грн</h2>
                    </div>
                    <div class="others_price">
                        <ul>
                            <li>
                                <a href="https://kvshop.com.ua/naushniki/hator/hator-hypergang-evo-hta-810/?utm_source=NadaviREG&utm_medium=cpc">
                                    Kvshop.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://wo.ua/garnitura-hator-hypergang-evo-black-hta-810.html?utm_source=Nadavi&utm_medium=cpc&utm_campaign=o_86059-c_39-s_1-k_239-p_2-i_0-d_3">
                                    ШО <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://stylus.ua/hator-hypergang-evo-black-hta-810-p764198c102.html?utm_source=nadavi&utm_medium=price&utm_term=764198&utm_content=HATOR&utm_campaign=av%3A%20naushniki">
                                    stylus.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://luckylink.kiev.ua/hator-hypergang-evo-hta-810/?utm_source=Nadavi">
                                    luckylink.kiev.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://enko.com.ua/shop/tv-audio-video-foto/audiotekhnika/naushniki-i-garnitury/naushniki-hator-hypergang-evo-hta-810/">
                                    enko.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://www.foxtrot.com.ua/uk/shop/garnituri_dlia_pk_hator_hypergang-evo-hta-810.html?utm_source=nadavi&utm_medium=cpc&utm_term=garnituri_dlia_pk_hator_hypergang-evo-hta-810&utm_campaign=AV-garnituri_dlia_pk">
                                    foxtrot.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://www.ctrs.com.ua/naushniki/garnitura-igrovaya-hator-hypergang-evo-hta-810-black-706220.html?utm_source=nadavi.market">
                                    ctrs.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://tehnopostavka.com.ua/garnitura_hator_hypergang_evo_black_hta_810">
                                    tehnopostavka.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://compx.com.ua/komputerna-garnitura-hator-hypergang-evo-black-hta-810-u1/?utm_source=nadavi&utm_medium=cpc">
                                    compx.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                            <li>
                                <a href="https://tehno-mart.com.ua/hator-hypergang-evo-black-hta-810/">
                                    tehno-mart.com.ua <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                <em>1999 грн.</em>
                            </li>
                        </ul>
                    </div>
                    <div class="like">
                        <div class="listen">
                            <p><span><i class="fa-regular fa-heart"></i></span>в список</p>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox">
                            <label>додати до порівняння</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="question">
            <h2>Питання-відповідь по Hator Hypergang EVO <span>Поставити запитання</span></h2>
            <div class="cardList">
                <div class="card">
                    <div class="img">
                        <img src="https://lh3.googleusercontent.com/a-/AOh14Ghz4ecWgSziLe8u1sVDxRA5kZWxt92gipJa2wm8=s96-c?sz=50" alt="">
                    </div>
                    <div class="text">
                        <h3>Danger F1opi <span>12 травня, 12:33</span></h3>
                        <p>Подойдут ли єти наушники к икс бокс сериас с и будет ли работать там микрофон.</p>
                        <em><span>- Відповіді 1</span> <spann>+ Відповісти</spann></em>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <span><i class="fa-solid fa-user-large"></i></span>
                    </div>
                    <div class="text">
                        <h3>Дима Щелкун <span>5 червня 2021, 21:14</span></h3>
                        <p>можно ли подключать эти наушники к телефону для игр</p>
                        <em><span>- Відповіді 1</span> <spann>+ Відповісти</spann></em>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <span><img src="https://abrakadabra.fun/uploads/posts/2022-03/1647809364_1-abrakadabra-fun-p-milie-avatarki-na-vatsap-2.jpg" alt=""></span>
                    </div>
                    <div class="text">
                        <h3>anonim<span>3 січня 2021, 11:44</span></h3>
                        <p>Хватит ли встроеной Realtek ALC887, для раскрытия полного потенциала гарнитуры? Материнка Asus H81M-K</p>
                        <em><span>- Відповіді 1</span> <spann>+ Відповісти</spann></em>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <span><img src="https://www.youloveit.ru/uploads/posts/2020-04/1586360515_youloveit_ru_dipper_gravity_falls_na_avu02.jpg" alt=""></span>
                    </div>
                    <div class="text">
                        <h3>anonim<span>26 грудня 2020, 09:34</span></h3>
                        <p>Подходят ли они к PS4? #</p>
                        <em><span>- Відповіді 1</span> <spann>+ Відповісти</spann></em>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <span><i class="fa-solid fa-user-large"></i></span>
                    </div>
                    <div class="text">
                        <h3>Артем Грицай<span>19 серпня 2020, 16:28</span></h3>
                        <p>Здравствуйте, на этих наушниках есть регулятор громкости звука?! #</p>
                        <em><span>- Відповіді 1</span> <spann>+ Відповісти</spann></em>
                    </div>
                </div>
            </div>
            <div class="more">
{{--                <em>Показано <span>3</span> із <span>5</span> запитань</em>--}}
{{--                <p>Ще <span>2</span> пропозицій</p>--}}
            </div>
        </div>
    </div>
    <div class="parameters">
        <div class="selection">
            <h2>ПІДБІР ЗА ПАРАМЕТРАМИ <span><i class="fa-solid fa-plus"></i></span></h2>
            <input type="text" placeholder="Пошук параметрів">
        </div>
        <div class="models">
            <div class="text_model">
                <h2>МОДЕЛІ <span><i class="fa-solid fa-minus"></i></span></h2>
                <p><span class="active">у продажі</span><span>всі</span></p>
            </div>
            <div class="brands">
                <h4>Бренди</h4>
                <p><span>A4Tech</span><span>Apple</span><span class="active">Hator</span><span>Huawei</span><span>HyperX</span><span>Jabra</span>
                    <span>JBL</span><span>Koss</span><span>Logitech</span><span>Panasonic</span><span>Philips</span><span>Razer</span>
                    <span>Samsung</span><span>Sennheiser</span><span>Sennheiser</span><span>Sony</span><span>Xiaomi</span></p>
                <div class="other">
                    <em>Усі бренди <span><i class="fa-solid fa-arrow-down-long"></i></span></em>
                </div>
            </div>
            <div class="container">
                <h4><span class="h4">Hator</span> (інтерфейс підключення) <span class="i"><i class="fa-solid fa-chevron-down"></i></span></h4>
                <div class="text">
                    <em>3.5 мм <span class="none">(mini-Jack)</span> <span><i class="fa-solid fa-chevron-up"></i></span></em>
                    <h4>Hyperpunk Hellraizer</h4>
                    <p>Hypergang HTA-810</p>
                </div>
                <div class="text">
                    <em>два 3.5 мм (mini-Jack) <span><i class="fa-solid fa-chevron-up"></i></span></em>
                    <h4>Hyperpunk Hellraizer</h4>
                    <p>Hypergang HTA-810</p>
                </div>
                <div class="question_headphones">
                    <p>Питання і побажання по підбору моделі <span><i class="fa-solid fa-arrow-right-long"></i></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

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
</body>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
