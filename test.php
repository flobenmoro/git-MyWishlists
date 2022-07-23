<?php
    session_start();
    include('inc/header.php'); 
    //include('addindb.php')


    $VVV = $_SESSION["useruid"];
    //echo $VVV;
    if (isset($_SESSION["useruid"])){
        //echo $_SESSION["useruid"];
    }else{
        //echo 'Not Logged in';
    }
?>



<div class="container">




    <h1 class="page-header text-center">Test header</h1>
    
    <form method="POST" action="addindb.php">

        <input type="text" name="passedstr">
        <input type="submit" value="Submit Now">
    </form>

    <?php include('inc/displaydbvalues.php'); 
    
        echo '<td> <form action="logoutcode.php" method="POST">';
        echo '<button type=submit class="btn btn-success btn-sm"  name="retPath" value="test.php" >Logout</button>';
        echo '</form> </td>';
    
    ?>


    

</div>