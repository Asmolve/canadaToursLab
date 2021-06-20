<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>Main Page</title>

</head>
<body style="background-color: mistyrose">

<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: snow">
    <a href="index.php" class="navbar-brand">
        <p>Canada Tours</p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="color: #e83e8c">
            <li class="nav-item active">
                <a href="#" class="nav-link"><p>Home</p></a>
            </li>
            <li class="nav-item">
                <a href="tours.php" class="nav-link"><p>Tours</p></a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right ">
            <li>
                <form action="signupin.php">
                    <button type="submit" class="btn btn-outline-primary">
                        <span class="glyphicon glyphicon-log-in"></span> 
                        <?php  
                            if($_SESSION['user']) {
                                echo 'Account';
                             }
                            else {
                                echo 'Sign Up/In';
                            } 
                        ?>
                    </button>
                </form>
            </li>
            <li>
                <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
                    <input class="form-control my-2 my-sm-0" name="word" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
                    </input>
                </form>
            </li>
        </ul>

    </div>
</nav>


<div class="container-fluid text-center align-content-center" style="margin-bottom: 15px">
    <blockquote class="blockquote" id="intro">
        <p>
            Welcome at Canada Tours company site, our dear guest. Our company provides cheap, colorful, entertaining and
            unforgettable trips all over Canada <3
        </p>
        <p id="heart">❤</p>
        <p>Thanks for choosing us :3
        </p>
    </blockquote>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active container-fluid">
                <img src="pics/HillwFlag.png" alt="First slide">
                <img src="pics/LonelyHouse.png" alt="First slide">
            </div>
            <div class="carousel-item container-fluid">
                <img src="pics/Ontario.png" alt="Second slide">
                <img src="pics/Summer.png" alt="Second slide">
            </div>
            <div class="carousel-item container-fluid">
                <img src="pics/InTrip.png" alt="Third slide">
                <img src="pics/Winter.png" alt="Third slide">
            </div>
        </div>

    </div>
    <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс.Карты</a><a href="https://yandex.ru/maps/profile?ll=-96.015288%2C50.105397&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D-96.015%252C50.105%26spn%3D0.001%252C0.001%26text%3DCanada%252C%2520Manitoba%252C%2520Seven%2520Sisters%2520Falls&utm_medium=mapframe&utm_source=maps&z=12.49" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUIQ4VUCA" width="77%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>

</div>

<footer class="fixed-bottom container-fluid text-center align-content-center" id="footer">
    <a href="https://www.instagram.com/asmolve/">
        Our Instagram:
        <img src="pics/instagram.svg" alt="" class="img" height="16px">
    </a>
    <a href="">
        Our VK: <img src="pics/vk.jpg" alt="" class="img" height="16px">
    </a>
    Our e-mail: asmolve.code@asmolve.nyan
</footer>



</body>
</html>
