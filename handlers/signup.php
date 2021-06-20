<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    function checkData($data, $connect){
        $q = mysqli_query($connect, "Select * from `users` where `email` = '$data'");
        $q = mysqli_num_rows($q);
        return $q;
    }

    
    if (isset($email) && isset($name) && isset($password)) {
        $emailCheck =  mysqli_query($connect, "Select * from `users` where `email` = '$email'");
        $emailCheck = mysqli_num_rows($emailCheck);
        $passwordCheck = mysqli_query($connect, "Select * from `users` where `password` = '$password'");
        $passwordCheck = mysqli_num_rows($passwordCheck);
        if($emailCheck>0) 
            $_SESSION['errorMessage'] = "This email is already in use, try different one ;3";
        if($passwordCheck>0) 
            $_SESSION['errorMessage'] = "This password is already in use, try different one ;3";
        if(($emailCheck+$passwordCheck) ==0 ){
            mysqli_query($connect, 
                "INSERT INTO `users`(`id`, `name`, `email`, `password`) 
                    VALUES (NULL, '$name', '$email', '$password')");
            $_SESSION['Message'] = "Alright, you have been registered on our site succesfully *-*";
        }
    }
    else {
        $_SESSION['errorMessage'] = 'Something went wrong with registration O.o Try again :3'; 
    };

    header('Location: ../signupin.php');
        