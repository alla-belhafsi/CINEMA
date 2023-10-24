<?php

class Role  {

    private string $nomPersonnage;
    private Casting $casting;

    public function __construct(string $nomPersonnage) {
       $this->nomPersonnage = $nomPersonnage;
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

    public function getNomPersonnage(): string {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage($nomPersonnage) {
        $this->nomPersonnage = $nomPersonnage;
         return $this;
    }
    
    public function __toString() {
        return $this->nomPersonnage;
    }
}