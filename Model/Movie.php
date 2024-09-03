<?php
// creo la mia classe Movie
class Movie{
    //dichiaro le variabili di istanza
        public $name;
        public $director;
        public $genre = [];
        public $cast = [];
    //definisco il costruttore
        function __construct($_name, $_director, $_genre, $_cast){
            $this->name = $_name;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->cast = $_cast;
        }
    // definisco un metodo
        function printName(){
            echo $this->name;
        }
    }
