#!/usr/bin/php
<?php
    function ft_split($str){
        $space = array_unique(explode(" ", $str));
        foreach($space as $key => $val){
            if (empty($val))
                unset($space[$key]);
        }
        return   array_values($space);
    }
?>