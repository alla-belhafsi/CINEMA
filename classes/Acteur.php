<?php

class Acteur extends Personne {

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe) {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
    }

    public function getInfos() {
        return parent::getInfos();
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}