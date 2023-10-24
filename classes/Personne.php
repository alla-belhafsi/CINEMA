<?php

class Personne {

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $sexe;


    public function __construct(string $nom, string $prenom, string $dateNaissance, string $sexe) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->sexe = $sexe;
        
    }


    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getDateNaissance() {
        return $this->dateNaissance->format("d-m-Y");
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getSexe(): string {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function getInfos() {
        return $this->prenom." ".$this->nom." ".$this->dateNaissance->format("d-m-Y")." ".$this->sexe;
    }

    public function getIdentity() {
        return $this->prenom." ".$this->nom;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}