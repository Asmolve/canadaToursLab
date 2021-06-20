<?php
    require_once 'C:\OpenServer\domains\canadatours.ca\handlers\connect.php';

    if(array_key_exists("word", $_POST))
    {
        $word = $_POST["word"];
        mysqli_multi_query($connect,"SELECT * FROM `tours` WHERE MATCH(`destination`, `description`) AGAINST ('$word')");
        $result = mysqli_store_result($connect); 
    }
?>    




















