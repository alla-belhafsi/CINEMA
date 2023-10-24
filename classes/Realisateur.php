<?php

class Realisateur extends Personne {
    
    private array $films;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe) {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->films = [];
    }

    public function getInfos() {
        return parent::getInfos();
    }

    public function getFilms() {
        return $this->films;
    }

    public function setFilms($films) {
        $this->films = $films;
        return $this;
    }

    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    public function afficherFilmographie() {
        $result ="<br><b> Filmographie de ".$this.":</b><br><br>";
        foreach ($this->films as $film) {
            $result .= "<li>".$film->getInfos()."<br><br>";
        }
        return $result;
    }
}