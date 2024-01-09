<?php
    if (!isset($_COOKIE['language'])) {
        $options = array(
            'expires' => time()+3600*24*365*10,
            'path' => '/',
            'domain' => '',
            'secure' => true,
            'httponly' => false,
            'samesite' => 'None'
        );

        setcookie("language", "pl", $options);

        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/languages/pl.php';
    }
    else {
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/php/languages/'.$_COOKIE["language"].'.php';
    }
?>