<?php

class Casting {
    
    private array $films;
    private array $roles;
    private array $acteurs;

    public function __construct(Film $film, Role $role, Acteur $acteur) {
        $this->films = [];
        $this->roles = [];
        $this->acteurs = [];
        
    }

    public function getFilms() {
        return $this->films;
    }

    public function setFilms($films) {
        $this->films = $films;
        return $this;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
    }

    public function getAuteurs() {
        return $this->auteurs;
    }

    public function setAuteurs($auteurs) {
        $this->auteurs = $auteurs;
        return $this;
    }
}