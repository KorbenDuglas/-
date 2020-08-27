<?php
    // Подключение к базе данных
    $connectionDB = mysqli_connect(
 
        "localhost", // Название хоста
 
        "root", // username
 
        "root", // Пароль пользователя
 
        "live_search" // Название базы данных
    );
 
    // Проверка подключения
    if (mysqli_connect_errno()) {
 
        echo "Невозможно подключится к MySQL: " . mysqli_connect_error();
 
    }
?>