@extends("layout.app_main")
@section("content")
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
                    <li class="active" >ВІДГУКИ <span>16</span></li>
                    <li >ОБГОВОРЕННЯ <span>5</span></li>
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
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg"
                                alt="">
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
                                <p>Конструкція<span><i class="fa-regular fa-circle-question"></i></span></p> <em>накладні,
                                    закриті повнорозмірні Over-Ear</em>
                            </li>
                            <li>
                                <p>Мікрофон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>знімний на
                                    дужці</em>
                            </li>
                            <li>
                                <p>Мікрофон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>знімний на
                                    дужці</em>
                            </li>
                            <li>
                                <p>Тип підключення<span><i class="fa-regular fa-circle-question"></i></span></p>
                                <em>дротові</em>
                            </li>
                            <li>
                                <p>Підключення<span><i class="fa-regular fa-circle-question"></i></span></p> <em>mini-Jack (3.5
                                    мм) mini-Jack (2 x 3.5 мм)</em>
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
                                <p>Тип кабелю<span><i class="fa-regular fa-circle-question"></i></span></p> <em>круглий, в
                                    обплетенні</em>
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
                                <p>Частотний діапазон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>20 –
                                    20000 Гц</em>
                            </li>
                            <li>
                                <p>Чутливість<span><i class="fa-regular fa-circle-question"></i></span></p> <em>110 дБ</em>
                            </li>
                            <li>
                                <p>Діаметр динаміка<span><i class="fa-regular fa-circle-question"></i></span></p> <em>m53
                                    мм</em>
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
                                <p>Частотний діапазон<span><i class="fa-regular fa-circle-question"></i></span></p> <em>20 –
                                    10000 Гць</em>
                            </li>
                            <li>
                                <p>Чутливість<span><i class="fa-regular fa-circle-question"></i></span></p> <em>-42 дБ</em>
                            </li>
                            <li>
                                <p>Гнучка конструкція<span><i class="fa-regular fa-circle-question"></i></span></p> <em><span><i
                                            class="fa-solid fa-check"></i></span></em>
                            </li>
                        </ul>
                        <div class="hr"></div>
                    </div>
                    <div class="functions">
                        <h4>Функції та можливості</h4>
                        <ul>
                            <li>
                                <p>Регулювання гучності<span><i class="fa-regular fa-circle-question"></i></span></p> <em><span><i
                                            class="fa-solid fa-check"></i></span></em>
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
                                <p>Комплектаціяа<span><i class="fa-regular fa-circle-question"></i></span></p> <em>додатковий
                                    кабель</em>
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
                        <p>тип пристрою - гарнітура, Тип - геймерські (ігрові), підключення - дротове, конструкція -
                            повнорозмірні, тип кріплення - дуга...
                            щеKvshop.com.uaМенше рокуДоставка: по ХустуГарантія: від виробникаПоскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg"
                                alt="">
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
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg"
                                alt="">
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
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg"
                                alt="">
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
                        <img
                            src="https://flick.zone/wp-content/uploads/2021/05/u0438122-hator-hypergang-evo-hta-810-flick.zone_15399_nobg.png"
                            alt="">
                    </div>
                    <div class="text">
                        <h3>Hator Hypergang EVO HTA-810<span></span></h3>
                        <p>гарнітура, дротове, штекер 3.5 мм, 64 Ом, 110 дБ, Активне шумозаглушення - немає
                            Flick І Все для геймерівМенше рокуДоставка: у Хуст з КиєваГарантія: 24 міс. від виробника
                            Поскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg"
                                alt="">
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
                        <p>тип пристрою - гарнітура, Тип - геймерські (ігрові), підключення - дротове, конструкція -
                            повнорозмірні, тип кріплення - дуга...
                            щеKvshop.com.uaМенше рокуДоставка: по ХустуГарантія: від виробникаПоскаржитись</p>
                    </div>
                    <div class="color">
                        <div class="img_color">
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/640px-Black_colour.jpg"
                                alt="">
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
        <div class="question">
            <h2>Запитання</h2>
            <div class="cardList">
                <div class="card">
                    <div class="img">
                        <img src="https://lh3.googleusercontent.com/a-/AOh14Ghz4ecWgSziLe8u1sVDxRA5kZWxt92gipJa2wm8=s96-c?sz=50"
                             alt="">
                    </div>
                    <div class="text">
                        <h3>Danger F1opi <span>12 травня, 12:33</span></h3>
                        <p>Подойдут ли єти наушники к икс бокс сериас с и будет ли работать там микрофон. #</p>
                        <em><span> - Відповіді 1</span><span> +Відповіді </span></em>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.pinimg.com/474x/5f/03/10/5f0310152c8429dfbc441e99d5a8e33e.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Danger F1opi <span>12 травня, 12:33</span></h3>
                        <p>можно ли подключать эти наушники к телефону для игр</p>
                        <em><span> - Відповіді 1</span><span> +Відповіді </span></em>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.pinimg.com/736x/61/77/f7/6177f7a61cccf7a5fa5429af4fb1b2a0.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Danger F1opi <span>12 травня, 12:33</span></h3>
                        <p>Хватит ли встроеной Realtek ALC887, для раскрытия полного потенциала гарнитуры? Материнка Asus
                            H81M-K</p>
                        <em><span> - Відповіді 1</span><span> +Відповіді </span></em>
                    </div>
                </div>
                <div class="more">
                    <em>Показано 3 із 5 запитань</em>
                    <p>Ще 20 пропозицій</p>
                </div>
            </div>
        </div>
        <div class="video">
            <h2>Відеоогляди</h2>
            <div class="title_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/J7UOmJCIZYg" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="cardList">
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/J7UOmJCIZYg/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>НЕДОРОГИЕ и НЕУБИВАЕМЫЕ</h4>
                        <p><span>25 червня 2020</span> <span>116 267 переглядів</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/EPa28Fcti1s/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>ЧТО НОВОГО в Hator Hypergang EVO ?</h4>
                        <p><span>9 травня 2020</span> <span>131 262 перегляда</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/r3e5zyPmPgA/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Наушники HATOR Hypergang EVO</h4>
                        <p><span>2 липня 2020</span> <span>28 002 перегляда</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/atvT9krgEco/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Мои наушники для Call of Duty Mobile | Игровая</h4>
                        <p><span>22 березня 2020</span> <span> 617 переглядів</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="https://i.ytimg.com/vi/m59RX4E4v4Q/hqdefault.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Виграєш КОЖЕН клатч! Королі позиціонування -</h4>
                        <p><span>17 серпня</span> <span>293 перегляда</span></p>
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

@stop

