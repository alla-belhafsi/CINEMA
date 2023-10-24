<?php

class Genre {

    private array $films;
    private string $libelle;

    public function __construct(string $libelle) {
        $this->films= [];
        $this->libelle = $libelle;
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

    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    public function afficherParGenre() {
        $result ="<br><br><b> Film de genre ".$this.":</b><br><br>";
        foreach ($this->films as $film) {
            $result .= "<li>".$film->getTitre()."<br><br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->libelle;
    }
}