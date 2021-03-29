<?php
    session_start();
    require_once 'connect.php';


    $FirstName = $_POST['first_name'];
    $LastName = $_POST['last_name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];


    echo "Ваше имя:  $FirstName<br>";
    echo "Ваша фамилия: $LastName<br>";
    echo "Ваша почта:  $Email<br>";



    $Password = md5($Password);
    if (!empty($Password)) {
        $data = $connect->prepare("INSERT INTO artem.signup (id, first_name, last_name, email, password)
        VALUES (null, :param1, :param2, :param3, :param4)");
        $values = ['param1' => $FirstName, 'param2' => $LastName, 'param3' => $Email, 'param4' => $Password];
        $data->execute($values);
        echo "Запись добавлена";
        header('location: signin.php');
    } else {
        $_SESSION['message'] = 'Введите пароль!';
        header('location: signup.php');
    }





    
    // if (!empty($Password)) {
    //     $data = $connect->prepare("INSERT INTO `signup` (id, first_name, last_name, email, password, date_message)
    //     VALUES (null, :param1, :param2, :param3, :param4, CURRENT_TIMESTAMP)");
    //     $values = ['param1' => '$FirstName', 'param2' => '$LastName', 'param3' => '$Email', 'param4' => '$Password'];
    //     $data -> execute($values);
    //     echo 'Запись добавлена<br>';
    // } else {
    //     $_SESSION['message'] = "Введите пароль!";
    //     header('location: signup.php');
    // }

















