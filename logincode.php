<?php



include 'inc/conn.php';



if (isset($_POST['submit'])){
    
    //Get values from post
    $userName = $_POST['username'];
    $pwd = $_POST['password'];

    //Get data from database
    $sql = "SELECT * FROM users WHERE uid = '$userName'";
    $qr = $conn->query($sql);
    $testV = $qr->fetch_array();

    //Verify password
    $hashedPwd = $testV['pwd'];
    $checkPwd = password_verify($pwd, $hashedPwd);

    if ($checkPwd){
        echo $testV['id'];
        if (isset($_SESSION["useruid"])){
            
        }else{
            session_start();
            $_SESSION["useruid"] = $testV['uid'];
            echo  '$_SESSION["useruid"]';
        }
    }else{
        echo 'input not found';
    }

}else{
    
}


$returnPath = $_POST['retPath'];
header('location:'.$returnPath);
