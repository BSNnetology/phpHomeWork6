<?php
    declare(strict_types= 1);

    session_start();
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 1; 
    } else {
        $_SESSION['count']++; 
    }

    if (!($_SESSION["count"] % 3)) {
        header('location: ./page_four.php');
    }

    echo "<h4>Ваше посещение замечено, посчитано и передано куда надо...</h4>";
