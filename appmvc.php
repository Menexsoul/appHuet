<?php
    include "bdd.php";

    class Val {

        public function __construct() {
            $this -> bdd = new BDD();
        }
        
        public function afficherPage($mapage) {
            $this -> mysql = new mysqli("172.16.10.40", "sio1-tp2", "sio1TP2.56", "rpgquest");
            if ($mapage == 1) {
               $this -> page1();
            }
            else if ($mapage == 2) {
                $this -> page2();
            }
        }

        public function page1() {
            echo "page1";
        }

        public function page2() {
            echo "page2";
        }

    }


?>