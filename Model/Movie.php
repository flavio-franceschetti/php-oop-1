<?php
// creo la mia classe Movie
class Movie{
    //dichiaro le variabili di istanza
        public $name;
        public $director;
    //definisco il costruttore
        function __construct($_name, $_director){
            $this->name = $_name;
            $this->director = $_director;
        }
    // definisco un metodo
        function printName(){
            echo $this->name;
        }
    }