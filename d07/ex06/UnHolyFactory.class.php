<?php
    class UnHolyFactory{
        # Define all variables.
        private $army =  array();      // this holds all the fighters that were absorbed.

        # This function will add fighers to army.
        public function absorb($obj){
            // check if the obj is a figher.
            if (get_parent_class($obj) === "Fighter"){
                // check if the fighter type is already inserted.
                $obj_type = $obj->getType();
                if (!in_array($obj, $this->army)){
                    $this->army[] = $obj;
                    echo "(Absord a fighter of type $obj_type)".PHP_EOL;
                }
                else{
                    echo "(Factory already absorbed figher of type $obj_type)".PHP_EOL;
                }
            }
            else{
                echo "(Can't absord this, it's not a fighter)".PHP_EOL;
            }
        }

        # Create the fabricate function.
        public function fabricate($type_name){
            $is_found = 0;
            // find the type that matches a the current name.
            foreach($this->army as $key => $soldier){
                if ($type_name === $soldier->getType()){
                    // if the type was found create  a new type.
                    $new = clone $soldier;
                    echo "(Factory fabricate fighter of type ".$soldier->getType().")".PHP_EOL;
                    return $new;
                }
            }
            echo "(Factory hasn't absorbed any fighter of type ".$type_name.")".PHP_EOL;
            return NULL;
        }
    }
?>