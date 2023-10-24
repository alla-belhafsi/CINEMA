<?php

class Acteur extends Personne {

    private array $castings;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe) {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->castings = [];
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

    public function getIdentity() {
        return parent::getIdentity();
    }
}