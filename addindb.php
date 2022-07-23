<?php 
    
    include 'inc/conn.php'; 


    $_NameV = $_POST['passedstr'];

    

    $sql = "INSERT INTO `wishlisttable` (`id` , `Product` , `Quantity` , `Remarks`) values (NULL, '$_NameV' , '1', '')";
    $conn->query($sql);
    
    
    
    header('location:test.php');


    exit();
