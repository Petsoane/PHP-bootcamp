<?php
    class Tyrion extends Lannister{
        public function sleepWith($obj){
            if (get_class($obj) === "Sansa"){
                echo "Let's do this!".PHP_EOL;
            }
            else
                echo "NOT even if im drunk !".PHP_EOL;
        }
    }
?>