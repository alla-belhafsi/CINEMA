<?php

class Film {

    private Realisateur $realisateur;
    private Genre $genre;
    private string $titre;
    private DateTime $dateParution;
    private int $durer;
    private string $synopsis;
    private array $castings;
   
    public function __construct(Realisateur $realisateur, Genre $genre, string $titre, string $dateParution, int $durer, string $synopsis) {
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->titre = $titre;
        $this->dateParution = new DateTime($dateParution);
        $this->durer = $durer;
        $this->synopsis = $synopsis;
        $this->realisateur->addFilm($this);
        $this->genre->addFilm($this);
        $this->castings = [];
    }

    public function getRealisateur(): string {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur) {
        $this->realisateur = $realisateur;
        return $this;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
        return $this;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    public function getDateParution(): string {
        return $this->dateParution->format("d-m-Y");
    }

    public function setDateParution($dateParution) {
        $this->dateParution = $dateParution;
        return $this;
    }

    public function getDurer() {
        return $this->durer;
    }

    public function setDurer($durer) {
        $this->durer = $durer;
        return $this;
    }

    public function getDureeFormatee() {
        $dureeEnMinutes = $this->getDurer();
        return date("H\hi", $dureeEnMinutes * 60);
    }

    public function getSynopsis(): string {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;
        return $this;
    }
    
    public function getCastings() {
        return $this->castings;
    }

    public function setCastings($castings) {
        $this->castings = $castings;
        return $this;
    }

    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }
    
    public function afficherCastingfilm() {
        $result ="<br><li>Dans le film <b>".$this->getTitre()."</b>, ";
        foreach($this->castings as $casting) {
            $result .= $casting->getRole()." a été incarné par ".$casting->getActeur()."<br><br></li>";
        }
        return $result;
    }

    public function getInfos() {
        return "<b>".$this->titre."</b> en salle depuis ".$this->dateParution->format("d-m-Y")." (".$this->getDureeFormatee().").<br>".$this->synopsis;
    }
    
    public function __toString() {
        return $this->$titre." ".$this->dateParution->format("d-m-Y")." ".$this->durer." ".$this->synopsis;
    }
}