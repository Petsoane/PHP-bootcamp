#!/usr/bin/php

<?php 
    # create a new string.
    $file_name = str_replace("^", date("Y-m-d"), "c4r17s8.^.logins.log");
    echo $file_name."\n";
    # open the login file.
    $file = fopen("/var/log/login/$file_name", "r");
    if ($file){
        echo "file opend \n";
        while (($line = fgets($file)) !== false)
        {
            if (preg_match('/(.*?)still logged in/', $line, $user) == 1)
            {
                $info = preg_replace('/[ ]{2,}|[\t]/', ' ', $user[1]);
                echo $info;
            }
        }
    }
    fclose($file);
?>