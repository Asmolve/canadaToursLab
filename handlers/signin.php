<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';

    $email = $_POST['inputEmail'];
    $password = md5($_POST['inputPassword']);
    $query ="SELECT * FROM `users`   WHERE `email` = '$email' AND `password` = '$password'";
    $check_user = $connect->query($query);
    $user = $check_user->fetch_assoc();
    if( (int)$check_user->num_rows > 0){
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['name'],
            'purchased_tour' => $user['purchased_tour'],
            'is_admin' => $user['is_admin']
        ];

        $tour = 'purchased_tour';
        $query = "SELECT * FROM `tours` WHERE `id` = '$user[$tour]'";
        $check_tour = $connect->query($query);
        $tour = $check_tour->fetch_assoc();
        $_SESSION['user']['purchased_tour'] = $tour['destination'];

        header('Location: ../profile.php');
    }else{
        $_SESSION['errorMessage'] = "Wrong e-mail or password, try again O.o";
        header('Location: ../signupin.php');
    }
    