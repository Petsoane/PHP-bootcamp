<?php
    class Targeryen
    {
        public function resistsFire(){
            return False;
        }
        public function getBurned(){
            if ($this->resistsFire() === False)
                return ("Burns alive");
            else
                return ("emerges naked but unharmed");
        }
    }
?>