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
                    <li class="active">ОПИС <span></span></li>
                    <li>ВІДГУКИ <span>16</span></li>
                    <li>ОБГОВОРЕННЯ <span>5</span></li>
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
            <h3>Hator Hypergang HTA-810</h3>
            <div class="year">
                <span>2020 рік</span>
            </div>
            <div class="list">
                <div class="column1">
                    <div class="color">
                        <div class="text">
                            <h4>Колір</h4>
                            <div class="img">
                                <img src="https://firtka.if.ua/data/blog/200468/29cc81a86ba9a28ecf806376b17e608d.jpg" alt="">
                            </div>
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="construction">
                        <h4>Підключення та конструкція</h4>
                        <ul>
                            <li><p>Призначення <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>ігрові</em>
                            </li>
                            <li><p>Конструкція <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>накладні, закриті повнорозмірні Over-Ear</em>
                            </li>
                            <li><p>Мікрофон <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>знімний на дужці</em>
                            </li>
                            <li><p>Тип підключення <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>дротові</em>
                            </li>
                            <li><p>Підключення <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>mini-Jack (3.5 мм) mini-Jack (2 x 3.5 мм)</em>
                            </li>
                            <li><p>Штекер <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>прямий</em>
                            </li>
                            <li><p>Підведення кабелю <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>односторонній</em>
                            </li>
                            <li><p>Довжина кабелю <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>1 м</em>
                            </li>
                            <li><p>Тип кабелю <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>круглий, в обплетенні</em>
                            </li>
                        </ul>
                        <div class="hr"></div>
                    </div>
                    <div class="characteristics">
                        <h4>Характеристика</h4>
                        <ul>
                            <li><p>Звук <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>стерео</em>
                            </li>
                            <li><p>Імпеданс <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>64 Ом</em>
                            </li>
                            <li><p>Частотний діапазон <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>20 – 20000 Гц</em>
                            </li>
                            <li><p>Чутливість <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>110 дБ</em>
                            </li>
                            <li><p>Діаметр динаміка <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>53 мм</em>
                            </li>
                            <li><p>Тип випромінювачів <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>динамічні</em>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column2">
                    <div class="microphone">
                        <h4>Характеристики мікрофона</h4>
                        <ul>
                            <li><p>Частотний діапазон <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>20 – 10000 Гц</em>
                            </li>
                            <li><p>Чутливість <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>-42 дБ</em>
                            </li>
                            <li><p>Гнучка конструкція <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em><i class="fa-solid fa-check"></i></em>
                            </li>
                        </ul>
                        <div class="hr"></div>
                    </div>
                    <div class="functions">
                        <h4>Функції та можливості</h4>
                        <ul>
                            <li><p>Регулювання гучності <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em><i class="fa-solid fa-check"></i></em>
                            </li>
                        </ul>
                    </div>
                    <div class="hr"></div>
                    <div class="other">
                        <h4>Інше</h4>
                        <ul>
                            <li><p>Вага <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>265 г</em>
                            </li>
                            <li><p>Комплектація <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>додатковий кабель</em>
                            </li>
                            <li><p>Вага <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>hator.gg</em>
                            </li>
                            <li><p>Вага <span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>серпень 2020</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <em><span><i class="fa-solid fa-plus"></i></span>Повідомити про помилку в описі</em>
                <p>Інформація в описі моделі носить довідковий характер. <br> Завжди перед покупкою уточнюйте у менеджера інтернет-магазину характеристики і комплектацію товару Каталог <br><span>Hator 2022</span> - новинки, хіти продажів і найактуальніші моделі Hator.</p>
            </div>
        </div>




        <div class="other_headphones">
            <h2>Купити Hator Hypergang EVO <em>Усі ціни 37 <span><i class="fa-solid fa-arrow-right-long"></i></span></em></h2>
            <div class="cardList">
                <div class="card active">
                    <div class="img_product">
                        <img src="https://photo.kvshop.com.ua/products/113/113871/hator-hypergang-evo-hta-810.b.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Hator Hypergang EVO <span>(HTA-810)</span></h3>
                        <p>тип пристрою - гарнітура, Тип - геймерські (ігрові), підключення - дротове, конструкція - повнорозмірні, тип кріплення - дуга... ще
                            <br>Kvshop.com.uaМенше рокуДоставка: по ХустуГарантія: від виробника</p>
                        <em><span><i class="fa-solid fa-flag"></i></span>Поскаржитись</em>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://img09.rl0.ru/afisha/-x-i/daily.afisha.ru/uploads/images/a/fc/afcfce701cdb4e449aa8e14ae5bbc0d3.png" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <h4><span>1 999</span>грн</h4>
                        <div class="link">
                            <p>Перейти в магазин</p>
                        </div>
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
                        <h3>Гарнітура HATOR Hypergang EVO <span>(HTA-810)</span></h3>
                        <p>FOXTROT.UAЗ нами 6 роківДоставка: по ХустуПоскаржитись</p>
                        <em><span><i class="fa-solid fa-flag"></i></span>Поскаржитись</em>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://img09.rl0.ru/afisha/-x-i/daily.afisha.ru/uploads/images/a/fc/afcfce701cdb4e449aa8e14ae5bbc0d3.png" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <h4><span>2 098</span>грн</h4>
                        <div class="link">
                            <p>Перейти в магазин</p>
                        </div>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/63002.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card active">
                    <div class="img_product">
                        <img src="https://photo.kvshop.com.ua/products/113/113871/hator-hypergang-evo-hta-810.b.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Игровая гарнитура HATOR Hypergang EVO<span>(HTA-810)</span>черный</h3>
                        <p>Hypergang EVO — наша новая гарнитура, которая вобрала в себя все лучшие решения и наработки, основанные, в том числе, на опыт... ще
                            <br>Kvshop.com.uaМенше рокуДоставка: по ХустуГарантія: від виробника</p>
                        <em><span><i class="fa-solid fa-flag"></i></span>Поскаржитись</em>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://img09.rl0.ru/afisha/-x-i/daily.afisha.ru/uploads/images/a/fc/afcfce701cdb4e449aa8e14ae5bbc0d3.png" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <h4><span>1 999</span>грн</h4>
                        <div class="link">
                            <p>Перейти в магазин</p>
                        </div>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/104220.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="img_product">
                        <img src="https://photo.kvshop.com.ua/products/113/113871/hator-hypergang-evo-hta-810.b.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Гарнитура Hator Hypergang EVO <span>(HTA-810)</span>Black</h3>
                        <p>Retromagaz.comМенше рокуДоставка: у Хуст з КиєваПоскаржитись</p>
                        <em><span><i class="fa-solid fa-flag"></i></span>Поскаржитись</em>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://img09.rl0.ru/afisha/-x-i/daily.afisha.ru/uploads/images/a/fc/afcfce701cdb4e449aa8e14ae5bbc0d3.png" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <h4><span>1 789</span>грн</h4>
                        <div class="link">
                            <p>Перейти в магазин</p>
                        </div>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/90947.png" alt="">
                        </div>
                    </div>
                </div><div class="card active">
                    <div class="img_product">
                        <img src="https://photo.kvshop.com.ua/products/113/113871/hator-hypergang-evo-hta-810.b.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Гарнитура Hator Hypergang Evo Black<span>(HTA-810)</span></h3>
                        <p>Hypergang EVO — наша новая гарнитура, которая вобрала в себя все лучшие решения и наработки, основанные, в том числе, на опыт... ще
                            <br>ШОЗ нами 3 рокиДоставка: у Хуст з КиєваГарантія: 24 міс.</p>
                        <em><span><i class="fa-solid fa-flag"></i></span>Поскаржитись</em>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img src="https://img09.rl0.ru/afisha/-x-i/daily.afisha.ru/uploads/images/a/fc/afcfce701cdb4e449aa8e14ae5bbc0d3.png" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <h4><span>1 999</span>грн</h4>
                        <div class="link">
                            <p>Перейти в магазин</p>
                        </div>
                    </div>
                    <div class="logo_shop">
                        <div class="img_logo">
                            <img src="https://ek.ua/logo_shop/86059.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="more">
                <p>Ще <span>20</span> пропозицій</p>
            </div>
        </div>


        <div class="question">
            <h2>Запитання <em>Поставити запитання <span><i class="fa-solid fa-arrow-right-long"></i></span></em></h2>
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
                        <span><i class="fa-solid fa-user-large"></i></span>
                    </div>
                    <div class="text">
                        <h3>anonim<span>3 січня 2021, 11:44</span></h3>
                        <p>Хватит ли встроеной Realtek ALC887, для раскрытия полного потенциала гарнитуры? Материнка Asus H81M-K</p>
                        <em><span>- Відповіді 1</span> <spann>+ Відповісти</spann></em>
                    </div>
                </div>
            </div>
            <div class="more">
                <em>Показано <span>3</span> із <span>5</span> запитань</em>
                <p>Ще <span>2</span> пропозицій</p>
            </div>
        </div>
        <div class="video">
            <h2>Відеоогляди</h2>
            <div class="title_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/J7UOmJCIZYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="cardList">
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/J7UOmJCIZYg/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>НЕДОРОГИЕ и НЕУБИВАЕМЫЕ</h4>
                        <p>25 червня <span><i class="fa-solid fa-circle"></i></span> 2020112 962 перегляда</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/EPa28Fcti1s/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>ЧТО НОВОГО в Hator Hypergang EVO ?</h4>
                        <p>9 травня <span><i class="fa-solid fa-circle"></i></span> 202030 635 переглядів</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/r3e5zyPmPgA/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Наушники HATOR Hypergang EVO</h4>
                        <p>2 липня 2020 <span><i class="fa-solid fa-circle"></i></span> 26 371 перегляд</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/atvT9krgEco/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Мои наушники для Call of Duty Mobile | Игровая</h4>
                        <p>22 березня 2020<span><i class="fa-solid fa-circle"></i></span>8 469 переглядів</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/m59RX4E4v4Q/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Виграєш КОЖЕН клатч! Королі позиціонування -</h4>
                        <p>17 серпня <span><i class="fa-solid fa-circle"></i></span> 2022149 переглядів</p>
                    </div>
                </div>
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
</body>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
