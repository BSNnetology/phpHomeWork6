<?php
    declare(strict_types= 1);

    $text = "Текст для файла не передан";

    if (isset($_GET["text"])) {
        $text = $_GET["text"];
    }

    header('Content-Disposition: attachment; filename="UserText.txt');
    echo $text;