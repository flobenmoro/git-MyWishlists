<?php
    session_start();
    session_unset();
    session_destroy();

    $returnPath = $_POST['retPath'];

    header('location:'.$returnPath);

    exit();