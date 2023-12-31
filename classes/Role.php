<?php


class Role  {

    private string $nomPersonnage;
    private array $castings;

    public function __construct(string $nomPersonnage) {
       $this->nomPersonnage = $nomPersonnage;
       $this->castings = [];
    }

    public function getNomPersonnage(): string {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage($nomPersonnage) {
        $this->nomPersonnage = $nomPersonnage;
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

    public function afficherParRole() {
        $result = "<br><li><b>Acteurs ayant joué le rôle de $this :</b>";
        $result .= implode(', ', $this->castings)."<br></li>";
        return $result;
        
    }

    public function __toString() {
        return $this->nomPersonnage;
    }
}