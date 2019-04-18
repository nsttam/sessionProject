<?php
class Session{
    private $attributs=[]; // tableau ou on aura tous les attributs, d'abord il est vide. We add values in index.php

    /**
     * Session constructor.
     * @param array $attributs
     */
    public function __construct() //session init. attributs init. We check if variables are stored in session
    {
      session_start();
      foreach ($_SESSION as $key=>$value){ //we add attributs to session // session as an array
          $this->attributs[$key]=$value;
      }

    }

    public function __destruct(){ //we save attributs in session
        foreach ($this->attributs as $key=>$value){
            $_SESSION[$key]=$value; //SESSION est variable qui stock des donnees temporairement
        }
    }

    /**
     * @return array
     */
    public function getAttributs() //GETTER to use $attributs outside the class, because $attributs is private
    {
        return $this->attributs;
    }


    public function __set($key, $value){ //we call this function when we try to set a value in index.php for an attribut that doesn't exist
        echo "fx __set called";
        $this->attributs[$key]=serialize($value); //to convert object to string to store in PHP //la session elle prend en compte que les chaines de caracteres

    }

    public function __get($key) //we call this function when  we try to get an object/attribut  that doesn't exist
    {
        echo "__get fx called";
        return unserialize($this->attributs[$key]); //from string to object

    }

    //verifies if attribut exists, we have to call isset on index.php
    public function __isset($key) //to know if variable exists //as if it was 'catch' of isset in index.php
    {
        echo "__isset fx called";
        return isset($this->attributs[$key]); //key exists in array

    }
    public function __unset($key) //to destroy variable ?
    {
        echo "__unset fx called";
        unset($this->attributs[$key]);

    }









//    public function add($key, $value){
//        $this->attributs[$key]=$value; //on ajoute attribut à tableau attributs
//
//    }
//
//    public function update($key, $value){
//        $this->attributs[$key]=$value;
//
//    }
//
//    public function __set($key, $value){  //
//        $this->add ($key, $value);
//    }
//
//    public function __get($key){ //on retoruve valeur que n'existais pas
//        return $this->attributs[$key];
//    }




//isset pour verifier si attribut exist, quand n'existe pas, je rentre dans __isset

}

?>