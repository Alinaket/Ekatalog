@extends("layout.app_main")
@section("content")
<div class="content">
    <div class="content_product">
        @include(".product.component.heder")
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
