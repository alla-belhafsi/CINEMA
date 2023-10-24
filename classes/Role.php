<?php

class Role  {

    private string $nomPersonnage;

    public function __construct(string $nomPersonnage) {
       $this->nomPersonnage = $nomPersonnage;
    }
    
    public function __toString() {
        return $this->nomPersonnage;
    }
}