<?php
$page = __FILE__;
include 'include.php';

//We create new object
$session1 = new Session();

$session1->key1 = "toto"; //key1 atribut que n'existe pas pour ca on passe dans la fx set
//set on le donne des valeurs //je suis n train d'appeler la fx __set qui appelle la fx add//set est appel quand on assigne un valeur a attribut que n'existe pas

echo $session1->key1; //get



//echo ('serialize session '. serialize($session1)); //transformer objet en chaine de caract

//unserialize transforme chaine en objet
//var_dump($obj);


$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$z900 = new Kawasaki('Z900', 9200, true);

$session1->audiRS1 = $audiRS1; //ausiRS1(key), $audiRS1(value) //on asigne un attribut et sa valeur (ausiRS1) à session1 (SET)
$session1->z900 = $z900;


$session1->z900; //on appelle l'attribut (passe par __get)


var_dump('ajouté en session !!');

isset($session1->z900);

var_dump($session1);

?>