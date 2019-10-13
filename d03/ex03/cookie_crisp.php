<?php
    switch($_GET['action']){
        case 'set':
            setcookie("myCookie", $_GET['name']);
            break;
        case 'get':
            if (isset($_COOKIE['myCookie'])){
                echo $_COOKIE['myCookie']."\n";
            }
        case 'del':
            setcookie("myCookie", "", time()-3600);
    }
?>
