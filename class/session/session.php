<?php
class Session{
    public $attributs=[]; // tableau ou on aura tous les attributs

    /**
     * Session constructor.
     * @param array $attributs
     */
    public function __construct()
    {

    }

    /**
     * @return array
     */
    public function getAttributs()
    {
        return $this->attributs;
    }



    public function add($key, $value){
        $this->attributs[$key]=$value; //on ajoute attribut à tableau attributs

    }

    public function update($key, $value){
        $this->attributs[$key]=$value;

    }

    public function __set($key, $value){  //
        $this->add ($key, $value);
    }

    public function __get($key){
        return $this->attributs[$key];
    }




}

?>