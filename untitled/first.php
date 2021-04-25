<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="logo">
                <a href="index.php?page=first"><img src="images/Comfort.svg" alt=""></a>
            </div>
            <div class="menu-wrap d-flex">
                <nav class="flex-1 navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Про нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=catalogue">Каталог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=blog">Блог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакти</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="submenu-wrap">
                    <ul class="submenu">
                        <li><a href="index.php?page=registr"><i class="fas fa-user"></i></a></li>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i><span class="price">11.151 грн</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="hero-section">
    <div class="overlay-hero"></div>  <!-- ? -->
    <div class="container">
        <div class="row">
            <div class="info-wrap col-6">
                <h1>Comfort</h1>
                <p>Мережа магазинів меблів в Україні. Зручні меблі для дому та офісу,
                    що відповідають найвищим стандартам якості.</p>
                <a href="index.php?page=catalogue" class="btn">Переглянути меблі</a>
            </div>
            <div class="hero-slider-wrap col-6">
                <img src="images/slider1.jpg" alt="">
                <img src="images/slider2.jpg" alt="">
                <img src="images/slider3.jpg" alt="">
                <img src="images/slider4.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="whywe-wrap">
    <div class="container">
        <div class="row">
            <div class="info-wrap col-6">
                <h2>
                    Чому саме ми?
                </h2>
                <p>Comfort - це один із провідних українських інтернет-магазинів меблів,
                   який зарекомендував себе як сучасний торговий портал з широким
                   асортиментом меблів.</p>

                <p>В нашій компанії працюють досвідчені експерти. Команда професіоналів
                   Comfort здатна ідеально підібрати меблі під ваш інтер’єр.
                   Протягом 13 років компанія успішно співпрацює з архітекторами,
                   дизайнерами і декораторами.Наше завдання – допомогти Вам створити
                   простір Вашої мрії. Облаштувати місце, в яке Вам завжди захочеться
                   повертатися. В якому Вам буде красиво, зручно і просто добре.</p>
            </div>
            <div class="img-wrap col-6">
                <img src="images/why-we.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="catalogue-section">
    <div class="container">
        <h2>Каталог</h2>
        <div class="catalogue-slider row">
            <div class="item-wrap col-sm">
                <img src="images/catalogue-section1.png" alt="">
                <h3>Шафа купе з двома дверима 2000 ДСП модель 4</h3>
                <span class="price">8 529,00 грн</span>
                <a href="#" class="btn">Купити</a>
            </div>
            <div class="item-wrap col-sm">
                <img src="images/catalogue-section2.png" alt="">
                <h3>Стіл журнальний Plato mini lux gg</h3>
                <span class="price">5 533,00 грн</span>
                <a href="#" class="btn">Купити</a>
            </div>
            <div class="item-wrap col-sm">
                <img src="images/catalogue-section3.png" alt="">
                <h3>Ліжко двоспальне “Женева”</h3>
                <span class="price">20 668,00 грн</span>
                <a href="#" class="btn">Купити</a>
            </div>
            <div class="item-wrap col-sm">
                <img src="images/catalogue-section4.png" alt="">
                <h3>Диван прямий Баррі</h3>
                <span class="price">17 510,00 грн</span>
                <a href="#" class="btn">Купити</a>
            </div>
            <div class="item-wrap col-sm">
                <img src="images/catalogue-section5.png" alt="">
                <h3>Дитяче ліжко "Гербер"</h3>
                <span class="price"> 20000 грн</span>
                <a href="#" class="btn">Купити</a>
            </div>
            <div class="item-wrap col-sm">
                <img src="images/catalogue-section6.png" alt="">
                <h3>Кухоний куток "Пирамида" модель 9</h3>
                <span class="price">20000 грн</span>
                <a href="#" class="btn">Купити</a>
            </div>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <h2>Контакти</h2>
        <div class="row">

            <div class="col-3">

                <div class="phone-list row-1">
                    <h3>Телефони:</h3>
                    <ul>
                        <li><a href="#">+380 44 560 77 24</a></li>
                        <li><a href="#">+380 63 488 99 05</a></li>
                        <li><a href="#">+380 98 875 35 25</a></li>
                    </ul>
                </div>

                <div class="mail row-2">
                    <h3>Пошта:</h3>
                    <a href="#">comfortua@gmail.com</a>
                </div>

            </div>

            <div class="col-6">

                <div class="map row-1">
                    <div class="img-wrap">
                        <img src="images/map.png" alt="">
                    </div>
                </div>

                <div class="medias row-2">
                    <h3>Соціальні мережи:</h3>
                    <ul>
                        <li>
                            <div class="logo">
                                <a href="#"><img src="images/telegram.svg" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <a href="#"><img src="images/instagram.svg" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <a href="#"><img src="images/twitter.svg" alt=""></a>
                            </div>
                        </li>
                        <li>
                            <div class="logo">
                                <a href="#"><img src="images/facebook.svg" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-3">
                <div class="adress row-1">
                    <h3>Наші магазини:</h3>
                    <ul>
                        <li>
                            <a href="#">Київ м(м. Шулявська) бул. Вацлава Гамена, 2</a>
                        </li>
                        <li>
                            <a href="#">Харків вул. 23-ого Серпня, 29</a>
                        </li>
                    </ul>
                </div>


                <div class="work-time row-2">
                    <h3>Графік роботи:</h3>
                    <ul>
                        <li>Пн-Пт: 9:00-20:00</li>
                        <li>Сб-Нд: 9:00-19:00</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="footer-title">
                <h2>Comfort</h2>
            </div>
            <div class="footer-menu">
                <ul>
                    <li>
                        <a href="#">Оплата і доставка</a>
                    </li>
                    <li>
                        <a href="index.php?page=blog">Блог</a>
                    </li>
                    <li>
                        <a href="#">Контакти</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('.hero-slider-wrap').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
    });
    $('.catalogue-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.navbar-toggler').click(function () {
        $('#navbarNav').slideToggle()
    });
</script>
</body>
</html>