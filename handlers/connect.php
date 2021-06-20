<?php
    session_start();
    $connect = mysqli_connect('localhost', 'mysql', 'mysql', 'canadatours');
    if (!$connect){
        die('Error connect to database');
    }
    