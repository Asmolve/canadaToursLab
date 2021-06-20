<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';


    $description = $_POST['newDescription'];
    $id = $_POST['edit'];
    

    $sql ="UPDATE `tours` SET `description`=$description WHERE `id` = $id";

    mysqli_query($connect, "UPDATE `tours` SET `description`= '$description' 
                            WHERE `id` = '$id'");
  
   header('Location: ../tours.php');
        
    









?>
