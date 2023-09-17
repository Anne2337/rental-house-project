<?php

include '../database/connection.php';

if(isset($_POST['house-name'])){


    // you can include molre columns, since this is demo
    $insert =$db->prepare("insert into houses(house_name, location, price) values(:name, :location, :price)");
    $insert->bindParam(':name', $_POST['house-name']);
    $insert->bindParam(':location', $_POST['location']);
    $insert->bindParam(':price', $_POST['price']);

    if($insert->execute()){
        header("Location:index.php");
    }else{
        die();
    }
}
?>