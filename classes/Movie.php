<?php

class Movie {
    public $name;
    public $year;
    public $director;
    public $genres;


    function __construct(
        string $name,
        int $year,
        string $director,
        array $genres
    )
    {
        $this->name = $name;
        $this->year = $year;
        $this->director = $director;
        $this->genres = $genres;
    }

    function describeSelf() {
        return "Nome Film: " . $this->name . 
        " Uscito nelle sale nell'anno: " . $this->year .
        " Diretto da: " . $this->director .
        " Generi: " . print_r($this->genres);
    }
}