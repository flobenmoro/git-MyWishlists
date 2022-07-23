
<?php include 'inc/conn.php'; ?>

<?php

    $_NameV = $_POST['username'];
    $_pwd = $_POST['password'];
    $_hashedPwd = password_hash($_pwd, PASSWORD_DEFAULT);     

    //$sql = "INSERT INTO users (uid, pwd) values ('$_NameV' , '$_hashedPwd')";
    //$sql = "INSERT INTO users (uid, pwd) values ('$_NameV' , 'vvv')";
    $sql = "INSERT INTO `users` (`id`, `email`, `uid`, `pwd`) values (NULL , 'email@email.com' , '$_NameV' , '$_hashedPwd')";
    $conn->query($sql);
    
    echo $sql;

    //header('location:addUserPage.php');



