<?php
    class Jaime extends Lannister{
        public function sleepWith($obj){
            if (get_class($obj) === "Sansa")
            {
                echo "Let's do this!".PHP_EOL;
            }
            else if (get_class($obj) === "Cersei") {
                echo "With Pleasure, But on in a tower in winterfell, then.".PHP_EOL;
            }
            else{
                echo "Not even if im drunk !".PHP_EOL;
            }
        }
    }
?>