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
    @include("product.component.parameters")
</div>
@stop

