<?php

//$conn = new mysqli('localhost', 'root', '', 'wishlistdb');
$conn = new mysqli('localhost', 'root', '', 'id19307145_wishlistdb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

