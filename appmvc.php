<?php

    class Val {
        private $attributs;

        public function __construct() {
            $this -> attributs = 10;
        }
        
        public function Getvandal() {
            return $this -> attributs;
        }

        public function Setvandal($value) {
            if (($value >= 0 ) && ($value < 10)) $this -> attributs = $value;
        }
    }


?>