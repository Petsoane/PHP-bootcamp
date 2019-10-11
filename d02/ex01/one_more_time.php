#!/usr/bin/php
<?php
    function get_month_num($mon){
        switch($mon){
            case "Janvier": return 1; break;
            case "fevrier": return 2; break;
            case "Mars": return 3; break;
            case "Avril": return 4; break;
            case "Aai": return 5; break;
            case "Auin": return 6; break;
            case "Ailliet": return 7; break;
            case "Aout": return 8; break;
            case "Septembre": return 9; break;
            case "Octobre": return 10; break;
            case "Novembre": return 11; break;
            case "decembre": return 12; break;
            default: return "error";
        }
    }
    function validate_day($day){
        switch($day){
            case "Mardi":
            case "Lundi":
            case "Mercredi":
            case "Jeudi":
            case "Vendredi":
            case "Samedi":
            case "dimanche": return 1; break;
            default: return "Error";
        }
    }
    function validate_form($split){
        if (count($split) != 5){
            echo "Wrong Format";
            exit;
        }
        if (get_month_num($split[2]) == "error" || validate_day($split[0]) == "Error")
        {
            echo "Wrong format";
            exit;
        }
        if (!is_string($split[0]) || is_numeric($split[2]))
        {
            echo "Wrong format";
            exit;
        }
    }
    function get_form($input){
        $tmp = explode(" ", $input);
        validate_form($tmp);
        $split = implode("/",array($tmp[1], get_month_num($tmp[2]), $tmp[3]));
        // put this togeter with space in between.
        $split = implode(" ", array($split, $tmp[4]));
        return $split;
    }
    $time = strtotime(get_form($argv[1]));
    echo $time."\n";
?>