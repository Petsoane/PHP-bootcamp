#!/usr/bin/php
<?php
include("ft_split.php");
function get_input(){
    # open stdin to allow input to be given
    $in_stream = fopen("php://stdin", "r");
    # read a line from the stdin.
    $line = fgets($in_stream);

    fclose($in_stream);
    return $line;
}

$name= ft_split("hello                 world        ");
print_r($name);
print($name[2]);
?>