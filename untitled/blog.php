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
                                <a class="nav-link active" href="index.php?page=blog">Блог</a>
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
<section class="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Блог</h1>
            </div>
            <div class="img-wrap col-6">
                <img src="images/about-us.png" alt="">
            </div>
            <div class="info-wrap col-6">
                <h2>Про нас</h2>
                <p>
                    Компанія Comfort була створена в червні 2011 року
                    спочатку як інтернет-майданчик без виставкових залів,
                    а вже через деякий час  перейшла в сферу офлайн продажу.
                    Зараз мережа магазинів Comfort складається з
                    двох роздрібних магазинів в Києві та Харкові.
                </p>
            </div>
            <div class="info-wrap col-12">
                <p>
                    Для того, щоб відповідати останнім тенденціям в меблевій сфері,
                    ми постійно поповнюємо наш каталог товарів магазину.
                    Зараз ми можемо запропонувати нашим клієнтам більше 75 000
                    товарних позицій з самих різних категорій. Також ми дбаємо про
                    систему співробітництва, завдяки чому у нас є понад 200
                    партнерів-виробників якісної меблів. Серед них — популярні та
                    затребувані українські і європейські компанії.
                </p>
            </div>
            <div class="info-wrap col-6">
                <p>
                У 2014 році Comfort став офіційним
                членом Української асоціації меблевиків
                та приймає активну участь у її роботі.
                Наші представники беруть активну
                участь у розвитку меблевого ринку
                України, працюючи на посадах членів
                правління Асоціації та Ревізійної комісії.
                Головною метою такого співробітництва
                є  надання якісного сервісу та його
                удосконалення, розробка високих
                стандартів для меблевих виробникив
                та ін.</p>
            </div>
            <div class="img-wrap col-6">
                <img src="images/about-us2.png" alt="">
            </div>
            <div class="last-text info-wrap col-12">
                Інтернет-магазин Comfort протягом декількох років тримає позицію
                «ТОП-3» серед українських сайтів меблевої тематики і має постійне
                лідерство в пошуковому трафіку завдяки сильній маркетинговій
                команді фахівців.
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
</body>
</html>