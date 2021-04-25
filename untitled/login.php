<?php
session_start();
require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $res = mysqli_query($connect, $select);
    $rows = mysqli_num_rows($res);

    if($rows == 1) {
        $_SESSION['username'] = $username;
    } else {
        $fail = "Помилка при авторизувані";
    }
}

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $success = "Вітаємо $username. Ви успішно авторизувались.";
}
?>
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
<section class="registr-page">
    <div class="container">
        <h2 class="col-12 text-center">Увійти</h2>
        <form class="form-signin text-center" action="login.php" method="post">
            <label class="col-12">
                <input type="text" name="username" class="form-control" placeholder="Ім'я користувача" required>
            </label>
            <label  class="col-12">
                <input type="password" name="password" class="form-control" placeholder="Пароль" required>
            </label>
            <button class="registr-btn log-btn">Увійти</button>
            <a href="registr.php" class="registr-btn">Зареєструватися</a>
            <?php if(isset($success)){?> <div class="alert alert-success login-message" role="alert"><?php echo $success; ?>
            </div><a href='logout.php' class='registr-btn log-btn'>Вийти</a><?php }?>
            <?php if(isset($fail)){?> <div class="alert alert-danger login-message" role="alert"><?php echo $fail; }?>
        </form>
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