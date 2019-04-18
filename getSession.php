<?php
include 'include.php';
$session2 = new Session();
foreach ($session2->getAttributs() as $attr){ //I get values in attributs[] and unserialize them to see them as objects
    var_dump (unserialize($attr));
}
?>