<?php 
    include('inc/header.php'); 

?>



<div class="container">


    <h1 class="page-header text-center">Add User Page</h1>
    
    <form method="POST" action="addusercode.php">

        <p>Username</p>
        <input type="text" name="username">
        
        <p>Password</p>
        <input type="text" name="password">

        <p></p>
        <input type="submit" value="Submit Now" name="submit">

    </form>


</div>