<h1> POO CINEMA </h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



// Role

$bw1 = new Role("Harry STAMPER");
$ja1 = new Role("Nancy CALLAHAN");
$ja2 = new Role("Susan STORM");
$gl1 = new Role("Grégory CERVA");

// Acteur

$bw = new Acteur("WILLIS", "Bruce", "1977-04-05", "Masculin");
$ja = new Acteur("ALBA", "Jessica", "1988-02-27", "Féminin");
$ja = new Acteur("ALBA", "Jessica", "1988-02-27", "Féminin");
$gl = new Acteur("LELLOUCHE", "Gilles", "1972-07-05", "Masculin");

//Realisateur

$ss = new Realisateur("SPIELBERG", "Steven", "1963-10-03", "Masculin");
$cj = new Realisateur("JIMENEZ", "Cédric", "1972-07-05", "Masculin");
$ts = new Realisateur("STORY", "Tim", "1970-03-13", "Masculin");

// Genre

$ac = new Genre("Action");
$sf = new Genre("Science-fiction");
$co = new Genre("Comédie");

// Film

$fourfantastic = new Film($ts, $co, "Les 4 Fantastiques et le surfer d'argent", "2007-08-08", 92, "Alors que le mariage de Mr Fantastic et de la Femme Invisible s'annonce comme l'événement de l'année, un mystérieux Surfer d'Argent surgit de l'espace et provoque d'étranges phénomènes sur la Terre.
Rapidement, les 4 Fantastiques vont découvrir le dessein secret de cet être aux pouvoirs surprenants et la menace qu'il fait peser sur notre planète, mais ils vont aussi voir ressurgir leur ennemi juré...
Face au danger, amis et ennemis vont devoir unir leurs forces comme jamais...");
$armageddon = new Film($ss, $sf, "Armageddon", "1998-08-05", 148, "Alors qu'un astéroide géant se dirige vers la Terre, un spécialiste du forage pétrolier et son équipe de têtes brûlées s'entraînent pour aller poser une charge au coeur du caillou spatial.");
$sincity = new Film($ss, $sf, "Sin City", "2005-06-01", 123, "Dwight est l'amant secret de Shellie. Il passe ses nuits à protéger Gail et les filles des bas quartiers de Jackie Boy, un flic pourri, violent et incontrôlable. Certains ont soif de vengeance, d'autres recherchent leur salut. Bienvenue à Sin City, la ville du vice et du péché.");
$bacnord = new Film($cj, $ac, "Bac Nord", "2021-08-18", 164, "Poussée par sa hiérarchie, la BAC Nord, brigade de terrain, cherche sans cesse à améliorer ses résultats. Dans un secteur à haut risque, les flics adaptent leurs méthodes, franchissant parfois la ligne rouge. Jusqu'au jour où le système judiciaire se retourne contre eux...");

//Echo

//echo $bw->getInfos()."<br>";
//echo $ja->getInfos()."<br>";
echo $ss->afficherFilmographie();
echo $sf->afficherParGenre();
echo $ac->afficherParGenre();
