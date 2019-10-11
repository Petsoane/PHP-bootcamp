#!/usr/bin/php
<?php
    $handle = fopen("$argv[1]", "r");
    if($handle){
        while(($line = fgets($handle)) !== false){
            if (preg_match('/<a(.*?)>(.*?)<\/a>/', $line, $match) == 1){
               // print_r($match);
                $a = $match[0];
                // go through each tag and find the title
                if (preg_match('/title="(.*?)"/', $a, $title) == 1){
                    //print_r($title);
                    // relapace the title
                    $new_title = str_replace($title[1], strtoupper($title[1]), $title[0]);
                    // replace the title in the a tag with the new one
                    $a = str_replace($title[0], $new_title, $a);

                }
                // go through the tag and repplace the content;
                if(preg_match('/<a(.*?)>(.*?)</', $a, $cont) == 1)
                {
                    $a = str_replace($cont[2], strtoupper($cont[2]), $a);
                }
                echo str_replace($match[0], $a, $line);
            }
            else{
                echo $line;
            }
        }
    }
    fclose($handle)

?>