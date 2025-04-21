<?php
    declare(strict_types= 1);

    $count = 0;
    session_start();

    if (isset($_SESSION['count'])) {
        $count = $_SESSION['count']; 
    } 
    
    echo "<h2>Количество посещений Вами третей страницы сайта: $count </h2>";