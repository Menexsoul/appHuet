<?php
class BDD {

public function __construct() {
    $this -> mysql = false;
}

public function connexion() {
    mysql_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $this -> mysql = new mysqli("172.16.10.40", "sio1-tp2", "sio1TP2.56", "rpgquest");

    if ($this -> mysql == false) return false;
    else return true;
}

public function deconnexion() {
    if ($this -> mysql != false) {
        $this -> mysql -> close();
    }
    
}

public function requete() {
    
}

}
?>