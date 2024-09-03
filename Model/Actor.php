<?php
// creo la classe per gli attori
class Actor{
    //dichiaro le variabili di istanza
    public $name;
    public $surname;

    //definisco il costruttore
    function __construct($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    function getFullName(){
        return $this->name . ' ' . $this->surname;
    }
}
