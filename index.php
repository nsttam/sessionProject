<?php
$page = __FILE__;
include 'include.php';

$session1 = new Session();

$session1->key1 = "toto"; //set on le donne des valeurs //je suis n train d'appeler la fx __set qui appelle la fx add

echo $session1->key1; //get

var_dump($session1);

?>