<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';
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
    <title>Tours</title>

</head>
<body style="background-color: mistyrose">
<!--navigation-->
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
            <li class="nav-item ">
                <a href="index.php" class="nav-link"><p>Home</p></a>
            </li>
            <li class="nav-item active">
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

<style>
        .edit_remove{
             background-color: Transparent;
            background-repeat:no-repeat;
            border: none;
            color: rgb(19, 86, 255);
            cursor:pointer;
            overflow: hidden;
            outline:none;
            }
</style>
        


<div id="tours">
    <div style="height: 45px"></div>
    <div class="container-fluid">

        <?php

       
        function editTour($id) 
        {
            $_SESSION['editTour'] = $id;
           // header("Location: /handlers/edittour.php"); 
           return"";
        }

        $query ="SELECT * FROM `tours`";
        $dbh = $connect->query($query);
        $tours = $dbh->fetch_all(); 

        foreach($tours as $tour){
            $output = '
            <div class="row">
                <div class="col-4 left">
                    <img src="'. $tour[4] .'" alt="" class="img-fluid">
                </div>
                <div class="col-7 right">
                    <div class="description text-right">
                        <p>
                            '. $tour[2] .'
                        </p>
                        </br>
             ';
            if ($_SESSION['user']['is_admin'] == 1){
                $output .= '
                        <form action="\handlers\edittour.php" method="post">
                            <input type="text" name="newDescription" 
                                placeholder="New description"></br>
                            <label for="Edit'. $tour[0] .'" >Edit tour №
                                <input class="button edit_remove" id="Edit'. $tour[0] .'" type="submit" name="edit"
                                    value="'. $tour[0]  .'"/>
                            description</label>
                        </form> 
                        <form action="\handlers\deletetour.php" method="post">
                            <label for="Delete'. $tour[0] .'"> Delete tour №
                            <input class="button edit_remove" id="Delete'. $tour[0] .'" type="submit" name="delete"
                                value="'. $tour[0] .'"/>
                        </form> 
            ';
            }
    
            $output .= '</div></div></div>
            <div style="height: 25px"></div>';
            
            
            echo $output;
           /* function editTour($id){
                $_SESSION['editTour'] = $id;
                header("Location: /handlers/edittour.php"); 
            }      
            function deleteTour($id){
                $_SESSION['deleteTour'] = $id;
                header("Location: /handlers/deletetour.php"); 
            }

           /* if(array_key_exists('Edit', $_POST)) { 
                editTour($this); 
            } 
            else if(array_key_exists('Delete', $_POST)) { 
                deleteTour($this); 
            } */
            

        }
        ?>

    </div>
</div>


<!--footer-->
<footer class="fixed-bottom container-fluid text-center align-content-center" id="footer">
    <a href="https://www.instagram.com/asmolve/">
        Our Instagram:
        <img src="pics/instagram.svg" alt="" class="img" height="16px">
    </a>
    <a href="" >
        Our VK: <img src="pics/vk.jpg" alt="" class="img" height="16px">
    </a>
    Our e-mail: asmolve.code@asmolve.nyan
</footer>


</body>
</html>

