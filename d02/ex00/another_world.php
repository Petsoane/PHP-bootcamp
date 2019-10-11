#!/usr/bin/php
<?php
    function ft_spaceParse($arg){
        $arg = trim($arg);
        $arg = preg_replace('/[ ]{2,}|[\t]/', ' ', $arg);
        return ($arg);
    }
    echo ft_spaceParse($argv[1]);
?>