<?php 

    
    //include('inc/header.php'); 
    include('inc/conn.php');

    //$id = $_GET['item'];
    $id = $_POST['delbut'];
    $sql = "DELETE FROM wishlisttable WHERE id='$id'";
    $conn->query($sql);
  
     
    header('location:test.php');
    
    exit();
    

