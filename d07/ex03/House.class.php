<?php
    abstract class House{
        abstract function getHouseName();
        abstract function getHouseMotto();
        abstract function getHouseSeat();

        #  All houses willl have this function.
        public function introduce(){
            echo ("House ".$this->getHouseName()." of ".$this->getHouseSeat()." : ".$this->getHouseMotto().PHP_EOL);
        }
    }
?>