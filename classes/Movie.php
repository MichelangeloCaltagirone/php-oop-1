<?php

require_once __DIR__ . '/Cast.php';

class Movie {
    public $name;
    public $year;
    public $director;
    public $genres;
    public $cast;


    function __construct(
        string $name,
        int $year,
        string $director,
        array $genres,
        Cast $cast,
    )
    {
        $this->name = $name;
        $this->year = $year;
        $this->director = $director;
        $this->genres = $genres;
        $this->cast = $cast;
    }

    function describeSelf() {
        return "Nome Film: " . $this->name . 
        " Uscito nelle sale nell'anno: " . $this->year .
        " Diretto da: " . $this->director .
        " Generi: " . print_r($this->genres);
    }
}