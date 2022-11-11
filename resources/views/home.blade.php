<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
    <link rel="stylesheet" href="{{asset("css/recet.css")}}">
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
            <img src="https://ek.ua/img/svg/logo.svg" alt="">
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
    <ul class="menu_list">
        <li> <h3>гаджети</h3>
            <ul class="sub_menu">
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>смартфон</p></li>
            </ul>
        </li>

        <li><h3>компютори</h3>
            <ul class="sub_menu">
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
                <li><span><i class="fa-solid fa-mobile-screen"></i></span><p>компутеры</p></li>
            </ul>
        </li>
        <li><h3>TV</h3></li>
        <li><h3>аудіо</h3></li>
        <li><h3>побутова техніка</h3></li>
        <li><h3>клімат</h3></li>
        <li><h3>будинок</h3></li>
        <li><h3>дитячі товари</h3></li>
        <li><h3>ауто</h3></li>
        <li><h3>інструменти</h3></li>
        <li><h3>туризм</h3></li>
        <li><h3>спорт</h3></li>
        <li><h3>годинники і прикраси</h3></li>
    </ul>
</div>
<div class="add">
    <div class="icon_arrow">
        <span><i class="fa-solid fa-arrow-left"></i></span>
    </div>
    <div class="img">
        <ul class="top">
            <li class="container">
                <img src="https://ek.ua/jpg/jpg_katalog_ua/wide/206.jpg" alt="">
                <img src="https://ek.ua/jpg/jpg_katalog_ua/wide/149.jpg" alt="">
            </li>
            <li><img src="https://ek.ua/jpg/jpg_katalog_ua/239.jpg" alt=""></li>
            <li><img src="https://ek.ua/jpg/jpg_katalog_ua/wide_lg/300.jpg" alt=""></li>
        </ul>
        <ul class="bottom">
            <li><img src="https://ek.ua/jpg/jpg_katalog_ua/wide/129.jpg" alt=""></li>
            <li><img src="https://ek.ua/jpg/jpg_katalog_ua/wide/41.jpg" alt=""></li>
            <li><img src="https://ek.ua/jpg/jpg_katalog_ua/wide/157.jpg" alt=""></li>
            <li><img src="https://ek.ua/jpg/jpg_katalog_ua/wide/695.jpg" alt=""></li>
        </ul>
    </div>
    <div class="icon_arrow">
        <span><i class="fa-solid fa-arrow-right"></i></span>
    </div>
    <div class="circles">
        <span><i class="fa-solid fa-circle"></i></span>
        <span><i class="fa-solid fa-circle"></i></span>
        <span><i class="fa-solid fa-circle"></i></span>
        <span><i class="fa-solid fa-circle"></i></span>
    </div>
</div>
<div class="popular">
    <h2>Популярні моделі</h2>
    <div class="content">

    </div>
    <div class="slider_wrapper">
        <div class="icon_arrow">
            <span onclick="sliders(this, 0)"><i class="fa-solid fa-arrow-left"></i></span>
        </div>
        <div class="icon_arrow">
            <span onclick="sliders(this, 1)"><i class="fa-solid fa-arrow-right"></i></span>
        </div>
        <div class="cardList">
            @foreach($products as $item)
                <a href="{{route("product", ["id"=>$item->id])}}" class="card">
                    <div class="img">
                        <img src="{{asset($item->img)}}" alt="">
                    </div>
                    <div class="text">
                        <h3>{{$item->name}}</h3>
                        <span>{{$item->price}}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
<div class="popular">
    <h2>Популярні моделі</h2>
    <div class="content">
        <div class="icon_arrow">
            <span onclick="sliders(this, 0)"><i class="fa-solid fa-arrow-left"></i></span>
        </div>
        <div class="icon_arrow">
            <span onclick="sliders(this, 1)"><i class="fa-solid fa-arrow-right"></i></span>
        </div>
        <div class="slider_wrapper">
            <div class="cardList">
                @foreach($products as $item)
                    <div class="card">
                        <div class="img">
                            <img src="{{asset($item->img)}}" alt="">
                        </div>
                        <div class="text">
                            <h3>{{$item->name}}</h3>
                            <span>{{$item->price}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{--    recommendation--}}
<div class="recom">
    <div class="title_text">
        <h2>Статті, огляди, рекомендації</h2>
        <em>Усі матеріали<span><i class="fa-solid fa-arrow-right-long"></i></span></em>
    </div>
    <div class="cardList">
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="https://s.ek.ua/posts/files/4178/medium_pic.jpg" alt="">
            </div>
            <div class="text">
                <h3>Повітряні стрілки: ТОП-5 пневматичних степлерів</h3>
                <p>Столярні та будівельні Скобозабивачі, що працюють на стислому повітрі</p>
            </div>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="title">
        <h2>Каталог товарів</h2>
    </div>
    <div class="cardList">
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-mobile-button"></i></span>
            </div>
            <div class="text">
                <h3>Зв'язок і гаджети</h3>
                <p>Мобільні, Планшети, Приставки, Powerbank, Смарт годинники та браслети, Action камери, Навушники, Квадрокоптери (дрони), ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-computer"></i></span>
            </div>
            <div class="text">
                <h3>Комп'ютерна техніка</h3>
                <p>Ноутбуки, Планшети, Монітори, ПК, Комплектуючі, Приставки, Wi-Fi, Клавіатури, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-stapler"></i></span>
            </div>
            <div class="text">
                <h3>Офіс і канцелярія</h3>
                <p>БФП, Принтери, Картриджі, Папір, Проєктори, Факси, Дротові телефони, Канцелярія, </p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-camera"></i></span>
            </div>
            <div class="text">
                <h3>Фото і відеозйомка</h3>
                <p>Фотоапарати, Об'єктиви, Action камери, Стедіками (ручні стабілізатори), Карти пам'яті, Штативи, Акумулятори й батарейки, Студійне обладнання, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-tv"></i></span>
            </div>
            <div class="text">
                <h3>TV відео</h3>
                <p>Телевізори, Монітори, Підставки, кріплення, Медіаплеєри і ТВ-тюнери, Проєктори, Проєкційні екрани, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-headphones"></i></span>
            </div>
            <div class="text">
                <h3>Аудіотехніка</h3>
                <p>Навушники, Гарнітури, Портативні колонки, Аудіосистеми, Колонки, Акустика, Hi-Fi і Hi-End, Кабелі, Музичні інструменти, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-sink"></i></span>
            </div>
            <div class="text">
                <h3>Побутова техніка</h3>
                <p>Вбудована техніка, Мала побутова техніка, Пральні машини, Холодильники, Плити, Витяжки, Духовки, Пилососи, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-blender"></i></span>
            </div>
            <div class="text">
                <h3>Мала побутова техніка</h3>
                <p>Кавоварки й кавомашини, Електрочайники, Комбайни, Міксери й блендери, М'ясорубки, Соковижималки, Хлібопічки, Мультиварки, Фени, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-fan"></i></span>
            </div>
            <div class="text">
                <h3>Клімат і водопостачання</h3>
                <p>Кондиціонери, Вентилятори, Обігрівачі, Водонагрівачі, Зволожувачі, Котли, Теплові насоси, Радіатори, Каміни, Насоси, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-baby-carriage"></i></span>
            </div>
            <div class="text">
                <h3>Дитячі товари</h3>
                <p>Коляски, Ліжечка, Сповивальні столики, Стільчики для годування, Підгузки, Автокрісла, Велосипеди, Іграшки й розваги, РК моделі, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-dharmachakra"></i></span>
            </div>
            <div class="text">
                <h3>Авто та мото</h3>
                <p>Шини, Диски, Відеореєстратори, Сигналізації, Акумулятори, Автомастила, Автокрісла, Магнітоли і звук, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-screwdriver-wrench"></i></i></span>
            </div>
            <div class="text">
                <h3>Інструмент</h3>
                <p>Електроінструмент, Генератори, Зварювальні апарати, Будівництво, Ручний інструмент, Садова техніка, Драбини, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-campground"></i></span>
            </div>
            <div class="text none">
                <h3>Туризм і риболовля</h3>
                <p>Намети, Спальні мішки, Пальники, Ліхтарики, Термоси, Вудилища, Котушки, Мангали й барбекю, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-bicycle"></i></span>
            </div>
            <div class="text none">
                <h3>Спорт і активний відпочинок</h3>
                <p>Велосипеди, Ролики, Самокати, Гіроборди й моноколеса, Скейтборди, Тренажери, Лижі, Ковзани, Action камери, Спортхарчування, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-couch"></i></span>
            </div>
            <div class="text none">
                <h3>Ремонт</h3>
                <p>Сантехніка, Ремонт, Посуд, Меблі, Матраци, Декор, Охорона й розумний дім, Зоотовари, Валізи, ...</p>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <span><i class="fa-solid fa-clock"></i></span>
            </div>
            <div class="text none">
                <h3>Годинники, прикраси й аксесуари</h3>
                <p>Наручні годинники, Смарт годинники та браслети, Ювелірні прикраси, Сувеніри, Жіночі сумки, Парасольки, Валізи, Сумки дорожні, ...</p>
            </div>
        </div>
    </div>
</div>
<div class="instruction">
    <div class="info">
        <div class="title">
            <h1>Як користуватися сайтом?</h1>
        </div>
        <div class="container">
            <div class="img">
                <span><i class="fa-regular fa-comment"></i></span>
            </div>
            <div class="text">
                <p>E-Katalog — багатофункціональний сервіс пошуку товарів в інтернет-магазинах і порівняння цін. Він охоплює найрізноманітніші
                    категорії товарів: електроніка, комп'ютери, побутова техніка, автотовари, обладнання для ремонту та будівництва,
                    туристичне спорядження, дитячі товари і багато іншого.</p>

                <p>Наше завдання - допомогти покупцеві швидко і зручно знайти найвигіднішу пропозицію.
                    Для тих, хто визначається з вибором, в кожному розділі є підбір за параметрами і можливість порівняти товари між собою.
                    Доступний і зручний текстовий пошук, що дозволяє шукати як потрібні розділи, так і конкретні товари за назвою. А на сторінці кожної моделі є
                    докладна інформація, яка допоможе прийняти рішення: опис, технічні характеристики, фото і відео, корисні посилання та відгуки.
                    Там же знаходиться блок «Де купити?» зі списком інтернет-магазинів, цінами і прямими посиланнями на сторінку покупки.</p>

                <p>До системи E-Katalog підключено більше 1000 магазинів, дані по яких постійно оновлюються. Завдяки цьому ви зможете не
                    тільки вибрати відповідний товар, а й купити його за найвигіднішими умовами!</p>
            </div>
        </div>
    </div>
</div>
<div class="news">
    {{--    <td></td>     для силок--}}
    <h2>Новинки</h2>
    <div class="container">
        <ul>
            <li>Vitals PS-215-01</li>
            <li>Vitals PS-215-01</li>
            <li>Vitals PS-215-01</li>
            <li>Vitals PS-215-01</li>
            <li>Vitals PS-215-01</li>
            <li>Vitals PS-215-01</li>
            <li>Vitals PS-215-01</li>
        </ul>
        <ul>
            <li>Hama uRage Reaper 100</li>
            <li>Hama uRage Reaper 100</li>
            <li>Hama uRage Reaper 100</li>
            <li>Hama uRage Reaper 100</li>
            <li>Hama uRage Reaper 100</li>
            <li>Hama uRage Reaper 100</li>
            <li>Hama uRage Reaper 100</li>
        </ul>
        <ul>
            <li>Hama M1040</li>
            <li>Hama M1040</li>
            <li>Hama M1040</li>
            <li>Hama M1040</li>
            <li>Hama M1040</li>
            <li>Hama M1040</li>
            <li>Hama M1040</li>
        </ul>
        <ul>
            <li>Ewent EW3238</li>
            <li>Ewent EW3238</li>
            <li>Ewent EW3238</li>
            <li>Ewent EW3238</li>
            <li>Ewent EW3238</li>
            <li>Ewent EW3238</li>
            <li>Ewent EW3238</li>
        </ul>
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
<script src="{{asset("js/home.js")}}"></script>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
</body>
</html>
