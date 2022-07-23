<?php 
    session_start();
    include('inc/header.php'); 

?>



<div class="container">
    <?php
        
        if (isset($_SESSION["useruid"])){
            echo '<h1 class="page-header text-center">Hi '.$_SESSION["useruid"].'</h1>';;
        }else{
            echo '<h1 class="page-header text-center">Login Page</h1>';
        }
    ?>
    
    
    <form method="POST" action="logincode.php">

        <p>Username</p>
        <input type="text" name="username">
        
        <p>Password</p>
        <input type="text" name="password">

        <p></p>
        <input type="submit" value="Submit Now" name="submit">
        
        <input type="hidden" value=<?php echo basename(__FILE__);?> name="retPath">

    </form>

    <td> <form action="logoutCode.php" method="POST">
    <button type=submit class="btn btn-success btn-sm"  name="retPath" value=<?php echo basename(__FILE__);?>>Logout</button>
    </form> </td>

</div>
