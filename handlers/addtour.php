<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';

    if ($_SESSION['user']['is_admin'] !== 1){
            header('Location: ../signupin.php');
    }
    
    $destination = $_POST['destination'];
    $description = $_POST['description'];
    $picture = $_POST['picture'];

    if (isset($destination) && isset($description) && isset($picture)) {
        if(mysqli_query($connect, 
            "INSERT INTO `tours`(`id`, `destination`, `description`, `picture`) 
                VALUES (NULL, '$destination', '$description', '$picture')"))
        $_SESSION['Message'] = "Alright, the tour has been added succesfully";
        }
        else {
            $_SESSION['errorMessage'] = 'Something went wrong with adding this tour O.o Try again :3'; 
        };
        $sesEr = $_SESSION['errorMessage'];
        $sesSucc = $_SESSION['Message'];
        $msg = array(
            'error' => array($sesEr, isset($_SESSION['errorMessage'])),
            'success' => array($sesSucc, isset($_SESSION['Message']))
        );
        
        
    if(isset($sesSucc)) header('Location: ../tours.php');
    else header('Location: ../profile.php');

    ?>

