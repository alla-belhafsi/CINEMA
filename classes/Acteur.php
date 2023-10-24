<?php

class Acteur extends Personne {

    private Casting $casting;

    public function __construct(Casting $casting, string $nom, string $prenom, string $dateNaissance, string $sexe) {
        parent::__construct($nom, $prenom, $dateNaissance, $sexe);
        $this->casting = $casting;
        $this->casting->addActeur($this);
    }

    public function getCasting() {
        return $this->casting;
    }

    public function setCasting($casting) {
        $this->casting = $casting;
        return $this;
    }

    public function getInfos() {
        return parent::getInfos();
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}