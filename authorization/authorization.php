<?php
session_start();
require_once 'connect.php';


$Email = $_POST['email'];
$Password = md5($_POST['password']);


$check_user = $connect->prepare("SELECT * FROM artem.signup WHERE `email` = '$Email' AND `password` = '$Password'");
$check_user->execute();
$data = $check_user->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);