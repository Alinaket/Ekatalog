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
        <div class="reviews">
            <div class="text">
                <div class="title">
                    <h3>Відгуки про Hator Hypergang EVO <span>Додати відгук</span></h3>
                </div>
            </div>
            <div class="emoji">
                <div class="img">
                    <img src="https://ek.ua/img/svg/review-smile-dark-1.svg" alt="утікла в хащу, лиш пятки засверкали :)">
                    <em>2</em>
                </div>
                <div class="img">
                    <img src="https://ek.ua/img/svg/review-smile-dark-2.svg" alt="утікла в хащу, лиш пятки засверкали :)">
                    <em>4</em>
                </div>
                <div class="img">
                    <img src="https://ek.ua/img/svg/review-smile-dark-3.svg" alt="утікла в хащу, лиш пятки засверкали :)">
                    <em>4</em>
                </div>
                <div class="img">
                    <img src="https://ek.ua/img/svg/review-smile-dark-4.svg" alt="утікла в хащу, лиш пятки засверкали :)">
                    <em>7</em>
                </div>
            </div>
        </div>
        <div class="cardList">
            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>обычная модель, ничего особенного <span><img src="https://ek.ua/img/svg/review-smile-dark-3.svg"
                            alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment"></p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>Хороший звук, хорошее качество звука, низкая цена.</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>У меня брак - не работает микрофон</p>
                        <em>Danilo: <span>користуюся Hator Hypergang EVO кілька місяців</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                   <div class="date">
                       <span>18 жовтня 2020 #</span>
                   </div>
                </div>
            </div>
            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>Науши однозначно топ за свои то деньги :)<span><img src="https://ek.ua/img/svg/review-smile-dark-2.svg"
                                                                         alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment">Сегодня получил эти чудо-науши, думал за эту цену (1077 грн) ничем не удивлят, но не тут-то было) Очень доволен звуком,
                            хорошим позиционированием, удобно сидят на голове, покрывают полностью ухо, тоесть ничего на уши не давит, отлично поглощают шум,
                            так что за метр ничего не слышно. Дизайн удобный и ооочень красивый, не дешевит (черный матовый всегда топ). Спустя некоторое время увижу
                            что да как. Первое впечатление просто идеальное! Hator снова не подвели, так как и мышка, и кресло радуют меня тоже)</p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>Шикарный дизайн, очень достойное качество, читый, насыщенный звук + удобство использвания.</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>Не выявил пока что</p>
                        <em>Влад <span>користуюся Hator Hypergang EVO менше місяця</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                    <div class="date">
                        <span>17 вересня 2020 #</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>модель с серьезными недостатками<span><img src="https://ek.ua/img/svg/review-smile-dark-2.svg"
                                                                                alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment">Спустя полгода без каких-либо предпосылок отказал правый наушник</p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>Звук и позиционирование лучше, чем в наушниках за 600 грн</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>Недолговечность</p>
                        <em>Максим Черных: <span>користуюся Hator Hypergang EVO кілька місяців</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                    <div class="date">
                        <span>17 вересня 2020 #</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>модель с серьезными недостатками<span><img src="https://ek.ua/img/svg/review-smile-dark-4.svg"
                                                                       alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment">Спустя полгода без каких-либо предпосылок отказал правый наушник</p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>Звук и позиционирование лучше, чем в наушниках за 600 грн</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>Недолговечность</p>
                        <em>Максим Черных: <span>користуюся Hator Hypergang EVO кілька місяців</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                    <div class="date">
                        <span> 11 січня 2021 #</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>отличная модель, очень понравилось<span><img src="https://ek.ua/img/svg/review-smile-dark-1.svg"
                                                                       alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment">Жена дарила мне эти наушники на 23 февраля. Я сильно удивился такому подарку, потому что мой геймерский досуг не приводит ее
                            в восторг)) Но сказала: «Выбери, я подарю». Я выбрал эти. В Общем, гарнитура очень даже. Они полноразмерные, я имею в виду Over-Ear.
                            Прилегают отлично, дискомфорта в них не испытываю, не давят, голова от них не болит. Кроме того отлично защищают от «внешнего мира».
                            Звук крутой! Я обычно использую их во время игры, так вот в стрелялках оглохнуть можно))) Звучание чистое, без лишних звуков,
                            я бы сказал насыщенное. Микрофон очень чувствительный. Меня слышно отлично и чисто, как и с «ушами» никаких посторонних звуков.
                            Микрофон, кстати, съемный, что очень удобно. В сочетании со звуковой картой звук просто улёт! Внешне приятны, корпус пластиковый,
                            металлический только «скелет», легкие. Регулятор громкости расположен удобно на кабеле. Уши топ, жене спасибо</p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>качество звука как в наушниках, так и в микрофоне, удобные</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>не нашел</p>
                        <em>Ruslan: <span>користуюся Hator Hypergang EVO кілька місяців</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                    <div class="date">
                        <span>31 серпня 2020 #</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>https://youtu.be/m59RX4E4v4Q<span><img src="https://ek.ua/img/svg/review-smile-dark-1.svg"
                                                                         alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment">Загалом чудові вуха за свої кошти. Детальніше можна ознайомитись за посиланням: https://youtu.be/m59RX4E4v4Q</p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>Чудове позиціонування, гарний мікрофон, зручна конструкція, ціна</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>Незручний регулятор гучності, незйомний шнур навушників, запах пластику перші дні</p>
                        <em>Ященко:<span>користуюся Hator Hypergang EVO менше місяця</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                    <div class="date">
                        <span>  17 серпня 2022 #</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="useful">
                    <div class="question">
                        <p>Відгук корисний?</p>
                    </div>
                    <div class="br">

                    </div>
                    <div class="or">
                        <em>Так</em>
                        <em>Ні</em>
                    </div>
                </div>
                <div class="text">
                    <div class="container">
                        <h3>Вполне топ. Брать стоит.<span><img src="https://ek.ua/img/svg/review-smile-dark-1.svg"
                                                               alt="утікла в хащу, лиш пятки засверкали :)"></span></h3>
                        <p class="coment">Реально топ наушники за свои деньги. Покупал недели 3 назад все работает отлично.</p>
                        <p class="plus"> <span><i class="fa-solid fa-plus"></i></span>Хороший звук, сьёмный микрофон, удобно сидят на ушах</p>
                        <p class="minus"> <span><i class="fa-solid fa-minus"></i></span>Иногда кабель наушников отходит от звуковой карты, это единственный минус</p>
                        <em>Гуслистий Норман:<span>користуюся Hator Hypergang EVO менше місяця</span> </em>
                        <em class="discuss"> + Обговорити</em>
                    </div>
                    <div class="date">
                        <span> 20 січня 2021 #</span>
                    </div>
                </div>
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
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
</body>

