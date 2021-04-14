<?php

    $connect = new PDO('mysql:host = localhost, dbname = artem', 'artem', '123123');

    // ПРОВЕРКА ПОДКЛЮЧЕНИЯ К БАЗЕ ДАННЫХ 
    if(!$connect){
    echo 'Error';
    }
