<?php
    include ('appmvc.php');
    if (isset($_GET['page'])) $page = $_GET['page'];
    else $page = 1;

    $_GET['page'];
    
    $monapp = new Val();
    
    $monapp -> afficherPage($page);

?>