<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-meteor"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/wheatley">Уитли</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/GLaDOS">ГЛэДОС</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php 
        /*$url = $_SERVER["REQUEST_URI"];

        //echo "Вы на странице: $url, будьте внимательны!<br>";

        if ($url == "/") {
            require "../views/main.html";
        } elseif (preg_match("#^/wheatley#", $url)) {
            require "../views/wheatley.php";
        } elseif (preg_match("#^/GLaDOS#", $url)) {
            require "../views/GLaDOS.php";
        } */
        ?>
    </div> 
</body>
</html>

<?php

// подключаем пакеты которые установили через composer
require_once '../vendor/autoload.php';

// создаем загрузчик шаблонов, и указываем папку с шаблонами
// \Twig\Loader\FilesystemLoader -- это типа как в C# писать Twig.Loader.FilesystemLoader, 
// только слеш вместо точек
$loader = new \Twig\Loader\FilesystemLoader('../views');

// создаем собственно экземпляр Twig с помощью которого будет рендерить
$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

if ($url == "/") {
    // это убираем require "../views/main.html";
    
    echo $twig->render("main.html");
} elseif (preg_match("#/GLaDOS#", $url)) {
    // и это тоже require "../views/mermaid.html";
    
    echo $twig->render("GLaDOS.php");
} elseif (preg_match("#/wheatley#", $url)) {
    // и вот это require "../views/uranus.html";
    
    echo $twig->render("wheatley.php");
}