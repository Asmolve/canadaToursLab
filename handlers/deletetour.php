<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';

    $id = $_POST['delete'];

    mysqli_query($connect,  "DELETE FROM `tours` WHERE `id` = '$id'");

    header('Location: ../tours.php');
        
?>    




















