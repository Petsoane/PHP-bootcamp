<?php
     class Fighter{
        // This will hold the type of the fighter that is created.
        protected $type;

        protected function __construct($type){
            $this->type = $type;
        }
        public function getType(){
            return $this->type;
        }
        // This will be defined in every child.
        public function fight($target){
            return "";
        }
    }
?>