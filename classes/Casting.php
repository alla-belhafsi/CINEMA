<?php

class Casting {
    
    private Film $film;
    private Role $role;
    private Acteur $acteur;

    public function __construct(Film $film, Role $role, Acteur $acteur) {
        $this->film = $film;
        $this->role = $role;
        $this->acteur = $acteur;
        $this->film->addCasting($this);
        $this->role->addCasting($this);
        $this->acteur->addCasting($this);
    }

    public function getFilm() {
        return $this->film;
    }

    public function setFilm($film) {
        $this->film = $film;
        return $this;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }
}