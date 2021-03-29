<?php
    session_start();
    require_once 'connect.php';


    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $check_user = $connect->prepare("SELECT * FROM signup WHERE `email` = '$Email' AND `password` = '$Password'");
    echo mysqli_num_rows($check_user);
