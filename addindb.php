
<?php include 'inc/conn.php'; ?>

<?php

    $_NameV = $_POST['passedstr'];



    $sql = "INSERT INTO wishlisttable (Product) values ('$_NameV')";
    $conn->query($sql);

    header('location:test.php');



