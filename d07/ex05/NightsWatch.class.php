<?php
    class NightsWatch implements IFighter{
        private $recruits;

        # Create the recruit function.
        public function recruit($obj){
            if ($obj instanceof IFighter){
                $this->$recruits[] = $obj;
            }
        }
        public function fight(){
            foreach($this->$recruits as $key => $value){
                $value->fight();
            }
        }
        
    }
?>