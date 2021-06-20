<?php
    session_start();

    if($_SESSION['user']) {
        header('Location: ../profile.php');
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
    <title>Sign Up/In</title>

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
                <form action="signupin.php" class="active">
                    <button type="submit" class="btn btn-outline-primary">
                        <span class="glyphicon glyphicon-log-in"></span> Sign Up/Login
                    </button>
                </form>
            </li>
            <li>
                <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
                    <input class="form-control my-2 my-sm-0"  name="word" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
                    </input>
                </form>
            </li>
        </ul>

    </div>
</nav>


<div class="container-fluid row">
    <div style="margin-top: 15%;" class="col-4 align-content-center justify-content-center align-items-center align-self-center">
        <img src="pics/logo.webp" alt="" class="img img-fluid">
    </div>
    <div class="col-8 align-self-center align-content-center justify-content-center align-items-center" style="margin-top: 6%;">

        <div style="height: 40px"></div>

        <form class="form-signin text-center" action="handlers/signin.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required=""
                   autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-lg btn-primary btn-block" value="SignIn" type="submit">Sign in</button>
        </form>

        <div style="height: 40px"></div>

        <form class="text-center" action="handlers/signup.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
            <label for="signupName" class="sr-only">Name</label>
            <input type="text" name="name" id="signupName" class="form-control" placeholder="Name" required=""
                   autofocus="">
            <label for="signupEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="signupEmail" class="form-control" placeholder="Email address" required=""
                   autofocus="">
            <label for="signupPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="signupPassword" class="form-control" placeholder="Password" required="">
            <button class="btn btn-lg btn-primary btn-block" value="SignUp" type="submit">Sign up</button>
        </form>
    </div>
</div>



<?php
    $sesEr = $_SESSION['errorMessage'];
    $sesSucc = $_SESSION['Message'];
    $msg = array(
        'error' => array($sesEr, isset($_SESSION['errorMessage'])),
        'success' => array($sesSucc, isset($_SESSION['Message']))
    );
?>


<script>
    const msg = <?php echo json_encode($msg); ?>;
    if (msg['error'][1] === true) {
        alert(msg['error'][0])
        <?php  unset($_SESSION['errorMessage']) ?>
    }
    if (msg['success'][1] === true){ 
        alert(msg['success'][0])
        <?php  unset($_SESSION['Message']) ?>
   }
</script>


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
