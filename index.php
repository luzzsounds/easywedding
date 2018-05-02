<?php
date_default_timezone_set("Europe/Paris");
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');


$toto = new Querie();
$form = new formulaire();
debug::dump($form);

if($result = $toto->selectMethod ( "SELECT * FROM t_admin")){
    Debug::dump($toto);
}
else{
    echo"erreur";
}


