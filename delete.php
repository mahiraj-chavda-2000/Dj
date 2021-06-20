<?php
    require('connect.php');
    // print_r($_POST);
    $id=$_POST['id'][0];
    // print_r($_POST);
    // print_r($id);
    // exit;
    $sql = "DELETE FROM `m1` WHERE `m1`.`id` = $id";
    mysqli_query($conn,$sql);
    echo $sql;

?>