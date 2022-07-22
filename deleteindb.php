<?php 

    
    include('inc/header.php'); 


    //$id = $_GET['item'];
    $id = $_POST['delbut'];
    $sql = "DELETE FROM wishlisttable WHERE id='$id'";
    $conn->query($sql);
  
    

    //include('inc/displaydbvalues.php'); 
    header('location:test.php');
    
    
    

