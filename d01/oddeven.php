#!/usr/bin/php
<?php
    function get_input(){
        # open stdin to allow input to be given
        $in_stream = fopen("php://stdin", "r");
        # read a line from the stdin.
        $line = fgets($in_stream);
    
        fclose($in_stream);
        return trim($line);
    }
    while (1){
        print "Enter a number: ";
        $num = get_input();
        if ($num == null)
            break;
        if(is_numeric($num))
        {
            if ($num % 2 == 0)
                echo "The number $num is even\n";
            else
                echo "The number $num is odd\n";
        }
        else  print "$num is not a number\n";
    }
?>