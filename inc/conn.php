<?php

$conn = new mysqli('localhost', 'root', '', 'wishlistdb');
//$conn = new mysqli('localhost', 'root', '', 'id19307145_wishlistdb');


<<<<<<< HEAD
=======
//$conn = new mysqli('localhost', 'root', '', 'wishlistdb');
$conn = new mysqli('localhost', 'root', '', 'id19307145_wishlistdb');
>>>>>>> 2c7130de2bb1fec91ebc89b4c3b494009b6a9c15

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

