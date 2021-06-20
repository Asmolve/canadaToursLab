<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: ../signupin.php');
    }
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
    <title>Account</title>

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
            <li class="nav-item">
                <a href="index.php" class="nav-link"><p>Home</p></a>
            </li>
            <li class="nav-item">
                <a href="tours.php" class="nav-link"><p>Tours</p></a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right ">
            <li>
                <form action="profile.php" class="active">
                    <button type="submit" class="btn btn-outline-primary">
                        <span class="glyphicon glyphicon-log-in"></span> Account
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
<style>
    .mainBlock{
        font-family: "Lucida Handwriting";
        margin-top: 21%;
        align-content: center;
        justify-content: center;
        text-align: center;
        vertical-align: middle;
    }
    a{
        color: red;
        text-align: left;
        font-size: 21px;
    }
    input{
        padding: 8px;
        border: unset;
        border-bottom: 4px solid #e3e3e3;
        margin-left: 3px;
        
    }
    #addtour{
        margin-left: 25%;
        margin-top: 5%;
        text-align: left;
    }

</style>

<div class="mainBlock">
    <h1>Name: <?= $_SESSION['user']['name'] ?> </h1>
    <h2>Email: <?= $_SESSION['user']['email'] ?> </h2>
    <h2>Purchased tour: <?php 
        if($_SESSION['user']['purchased_tour']) {
            echo $_SESSION['user']['purchased_tour'];
        }else {
            echo "Haven't chosen yet";
        }
    
    ?> 
    </h2>
    <a href="handlers/signout.php">
        Quit
    </a>

<?php    
    if ($_SESSION['user']['is_admin'] == 1){
        echo '</br></br>
       
        <form class="form" id="addtour" action="handlers\addtour.php" role="form" method="post">
                <input class="col-5 " type="text" name="destination" id="destination" 
                    placeholder="Destination point" required="">
                
                <input class="col-8" type="text" name="description" id="description" 
                    placeholder="Description" required="">
                
                <input class="col-4" type="text" name="picture" id="picture" 
                    placeholder="Picture path" required="">
            </br>
            <button type="submit" class="btn btn-lg btn-primary btn-block col-3" onclick="handlers\addtour.php"> Add the tour</button>
        </form>  
        ';
    }   
?>
     

</br></br></br></br>


    <a href="handlers/sitemap.php">
        Sitemap
    </a>
</div>



<footer class="fixed-bottom container-fluid text-center align-content-center" id="footer">
    <a href="https://www.instagram.com/asmolve/">
        Our Instagram:
        <img src="pics/instagram.svg" alt="" class="img" height="16px">
    </a>
    <a href="">
        Our VK: <img src="pics/vk.jpg" alt="" class="img" height="17px">
    </a>
    Our e-mail: asmolve.code@asmolve.nyan
</footer>
</body>
</html>
