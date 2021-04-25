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
                                <a class="nav-link active" href="index.php?page=catalogue">Каталог</a>
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
<section class="catalogue-page">
    <div class="container">
        <div class="info-wrap col-12 text-center">
            <h1>Каталог</h1>
        </div>
        <div class="catalogue-main-wrap d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="catalogue-sidebar col-4">
                <ul>
                    <li><a href="#">Головна</a></li>
                    <li><a href="#">Шафи</a></li>
                    <li><a href="#">Кухні</a></li>
                    <li><a href="#">М'які меблі</a></li>
                    <li><a href="#">Вітальні</a></li>
                    <li><a href="#">Ліжка</a></li>
                    <li><a href="#">Дитячі меблі</a></li>
                    <li><a href="#">Кухоні куточки</a></li>
                    <li><a href="#">Столи обідні</a></li>
                    <li><a href="#">Журнальні столики</a></li>
                    <li><a href="#">Комп'ютерні столи</a></li>
                    <li><a href="#">Офісні меблі</a></li>
                    <li><a href="#">Комоди і тумби</a></li>
                    <li><a href="#">Ванні кімнати</a></li>
                    <li><a href="#">Спальні гарнітури</a></li>
                    <li><a href="#">Крісла і стільці</a></li>
                    <li><a href="#">Матраси</a></li>
                    <li><a href="#">Дзеркала</a></li>
                    <li><a href="#">Вішалки</a></li>
                    <li><a href="#">Двері</a></li>
                    <li><a href="#">NoReCa</a></li>
                    <li><a href="#">Розпродаж</a></li>
                    <li><a href="#">Акційні товари</a></li>
                </ul>
            </div>
            <div class="catalogue-products col-8">
                <div class="sorting">
                    <select name="sorting" id="sorting">
                        <option value="">за замовчуванням</option>
                        <option value="">від популярних</option>
                        <option value="">від дешевих</option>
                        <option value="">від дорогих</option>
                    </select>
                </div>
                <div class="products row">
                    <div class="col-4">
                        <img src="images/catalogue-section1.png" alt="">
                        <h3>Шафа купе з двома дверима 2000 ДСП модель 4</h3>
                        <span class="price">8 529,00 грн.</span>
                        <a href="" class="btn">Купити</a>
                    </div>
                    <div class="col-4">
                        <img src="images/catalogue2.png" alt="">
                        <h3>Шафа Virgo A 2D</h3>
                        <span class="price">7 580,00 грн.</span>
                        <a href="" class="btn">Купити</a>
                    </div>
                    <div class="col-4">
                        <img src="images/catalogue3.png" alt="">
                        <h3>Шафа-купе Белла модель 1</h3>
                        <span class="price">972,00 грн.</span>
                        <a href="" class="btn">Купити</a>
                    </div>
                    <div class="col-4">
                        <img src="images/catalogue4.png" alt="">
                        <h3>Шафа Ф’южин Е</h3>
                        <span class="price">6 269,00 грн.</span>
                        <a href="" class="btn">Купити</a>
                    </div>
                    <div class="col-4">
                        <img src="images/catalogue5.png" alt="">
                        <h3>Шафа купе з двома дверима Elegance</h3>
                        <span class="price">2 755,00 грн.</span>
                        <a href="" class="btn">Купити</a>
                    </div>
                    <div class="col-4">
                        <img src="images/catalogue6.png" alt="">
                        <h3>Шафа REG1L1D модель 6</h3>
                        <span class="price">1 530,00 грн.</span>
                        <a href="" class="btn">Купити</a>
                    </div>
                </div>
                <div class="pagination">
                    <ul class="d-flex">
                        <li>
                            <a href="#" class="btn">1</a>
                        </li>
                        <li>
                            <a href="#" class="btn">2</a>
                        </li>
                        <li>
                            <a href="#" class="btn">3</a>
                        </li>
                        <li>
                            <a href="#" class="btn">4</a>
                        </li>
                        <li>
                            <a href="#" class="btn">5</a>
                        </li>
                        <li>
                            <a href="#" class="btn">...</a>
                        </li>
                        <li>
                            <a href="#" class="btn">14</a>
                        </li>
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
</body>
</html>