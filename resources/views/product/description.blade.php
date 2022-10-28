<!doctype html>
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




        <div class="headphones">
            <h3>Hator Hypergang EVO</h3>
            <div class="list">
                <div class="column1">
                    <div class="color">
                        <div class="text">
                            <h4>Колір</h4>
                        </div>
                        <div class="img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg" alt="">
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="construction">
                        <h4>Підключення та конструкція</h4>
                        <ul>
                            <li>
                                <p>Призначення<span><i class="fa-regular fa-circle-question"></i></span></p> <em>ігрові</em>
                            </li>
                            <li>
                                <p>Конструкція<span><i class="fa-regular fa-circle-question"></i></span></p> <em>накладні, закриті повнорозмірні Over-Ear</em>
                            </li>
                            <li>
                                <p>Мікрофон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>знімний на дужці</em>
                            </li>
                            <li>
                                <p>Мікрофон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>знімний на дужці</em>
                            </li>
                            <li>
                                <p>Тип підключення<span><i class="fa-regular fa-circle-question"></i></span></p> <em>дротові</em>
                            </li>
                            <li>
                                <p>Підключення<span><i class="fa-regular fa-circle-question"></i></span></p> <em>mini-Jack (3.5 мм) mini-Jack (2 x 3.5 мм)</em>
                            </li>
                            <li>
                                <p>Штекер<span><i class="fa-regular fa-circle-question"></i></span></p> <em>прямий</em>
                            </li>
                            <li>
                                <p>Підведення кабелю<span><i class="fa-regular fa-circle-question"></i></span></p> <em>односторонній</em>
                            </li>
                            <li>
                                <p>Довжина кабелю<span><i class="fa-regular fa-circle-question"></i></span></p> <em>1 м</em>
                            </li>
                            <li>
                                <p>Тип кабелю<span><i class="fa-regular fa-circle-question"></i></span></p> <em>круглий, в обплетенні</em>
                            </li>
                        </ul>
                        <div class="hr"></div>
                    </div>
                    <div class="characteristics">
                        <h4>Характеристики</h4>
                        <ul>
                            <li>
                                <p>Звук<span><i class="fa-regular fa-circle-question"></i></span></p> <em>стерео</em>
                            </li>
                            <li>
                                <p>Імпеданс<span><i class="fa-regular fa-circle-question"></i></span></p> <em>64 Ом</em>
                            </li>
                            <li>
                                <p>Частотний діапазон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>20 – 20000 Гц</em>
                            </li>
                            <li>
                                <p>Чутливість<span><i class="fa-regular fa-circle-question"></i></span></p> <em>110 дБ</em>
                            </li>
                            <li>
                                <p>Діаметр динаміка<span><i class="fa-regular fa-circle-question"></i></span></p> <em>m53 мм</em>
                            </li>
                            <li>
                                <p>Тип випромінювачів<span><i class="fa-regular fa-circle-question"></i></span></p> <em>динамічні</em>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column2">
                    <div class="microphone">
                        <h4>Характеристики мікрофона</h4>
                        <ul>
                            <li>
                                <p>Частотний діапазон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>20 – 10000 Гць</em>
                            </li>
                            <li>
                                <p>Чутливість<span><i class="fa-regular fa-circle-question"></i></span></p> <em>-42 дБ</em>
                            </li>
                            <li>
                                <p>Гнучка конструкція<span><i class="fa-regular fa-circle-question"></i></span></p> <em><span><i class="fa-solid fa-check"></i></span></em>
                            </li>
                        </ul>
                        <div class="hr"></div>
                    </div>
                    <div class="functions">
                        <h4>Функції та можливості</h4>
                        <ul>
                            <li>
                                <p>Регулювання гучності<span><i class="fa-regular fa-circle-question"></i></span></p> <em><span><i class="fa-solid fa-check"></i></span></em>
                            </li>
                        </ul>
                        <div class="hr"></div>
                    </div>
                    <div class="other">
                        <h4>Інше</h4>
                        <ul>
                            <li>
                                <p>Вага<span><i class="fa-regular fa-circle-question"></i></span></p> <em>265 г</em>
                            </li>
                            <li>
                                <p>Комплектаціяа<span><i class="fa-regular fa-circle-question"></i></span></p> <em>додатковий кабель</em>
                            </li>
                            <li>
                                <p>Офіційний сайт<span></span></p> <em><a href="https://hator.gg/audio/hypergang-evo/"></a></em>
                            </li>
                            <li>
                                <p>Дата додавання на E-Katalog<span></span></p> <em>серпень 2020</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <em><span><i class="fa-solid fa-plus"></i></span>Повідомити про помилку в описі</em>
                <p>Iнформація в описі моделі носить довідковий характер.
                    <br> Завжди перед покупкою уточнюйте у менеджера інтернет-магазину характеристики і комплектацію товару
                    <br> <span>Каталог Hator 2022</span> - новинки, хіти продажів і найактуальніші моделі Hator.</p>
            </div>
        </div>

        <div class="other_headphones">
            <h2>Купити Hator Hypergang EVO <em>Усі ціни 35 →</em></h2>
            <div class="cardList">
                <div class="card active">
                    <div class="img_product">
                        <img src="https://photo.kvshop.com.ua/products/113/113871/hator-hypergang-evo-hta-810.b.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Hator Hypergang EVO <span>(HTA-810)</span></h3>
                        <p>тип пристрою - гарнітура, Тип - геймерські (ігрові), підключення - дротове, конструкція - повнорозмірні, тип кріплення - дуга...
                            щеKvshop.com.uaМенше рокуДоставка: по ХустуГарантія: від виробникаПоскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <span>1 999 грн.</span>
                        <p>Перейти в магазин</p>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/115179.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_product">
                        <img src="https://photo.kvshop.com.ua/products/113/113871/hator-hypergang-evo-hta-810.b.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Гарнітура HATOR Hypergang EVO<span>(HTA-810)</span></h3>
                        <p>FOXTROT.UAЗ нами 6 роківДоставка: по Хусту</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <span>2 098 грн.</span>
                        <p>Перейти в магазин</p>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/63002.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card active">
                    <div class="img_product">
                        <img src="https://retromagaz.com/uploads/products/a9/45/site_eqd7a7ads_b7650d1d.png" alt="">
                    </div>
                    <div class="text">
                        <h3>Гарнитура Hator Hypergang EVO (HTA-810) Black<span></span></h3>
                        <p>Retromagaz.comМенше рокуДоставка: у Хуст з Києва Поскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <span>1 789 грн.</span>
                        <p>Перейти в магазин</p>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/90947.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_product">
                        <img src="https://flick.zone/wp-content/uploads/2021/05/u0438122-hator-hypergang-evo-hta-810-flick.zone_15399_nobg.png" alt="">
                    </div>
                    <div class="text">
                        <h3>Hator Hypergang EVO HTA-810<span></span></h3>
                        <p>гарнітура, дротове, штекер 3.5 мм, 64 Ом, 110 дБ, Активне шумозаглушення - немає
                            Flick І Все для геймерівМенше рокуДоставка: у Хуст з КиєваГарантія: 24 міс. від виробника Поскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <span>1 999 грн.</span>
                        <p>Перейти в магазин</p>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/112642.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card active">
                    <div class="img_product">
                        <span><i class="fa-solid fa-camera"></i></span>
                    </div>
                    <div class="text">
                        <h3>Hator Hypergang EVO <span>(HTA-810)</span></h3>
                        <p>тип пристрою - гарнітура, Тип - геймерські (ігрові), підключення - дротове, конструкція - повнорозмірні, тип кріплення - дуга...
                            щеKvshop.com.uaМенше рокуДоставка: по ХустуГарантія: від виробникаПоскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <span>1 999 грн.</span>
                        <p>Перейти в магазин</p>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/115179.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="more">
                    <em></em>
                    <p>Ще 20 пропозицій</p>
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
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
</body>

