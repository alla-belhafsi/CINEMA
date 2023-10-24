<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



// Role

$stamper = new Role("Harry STAMPER");
$callahan = new Role("Nancy CALLAHAN");
$storm = new Role("Susan STORM");
$cerva = new Role("Grégory CERVA");

// Acteur

$bw = new Acteur("WILLIS", "Bruce", "1977-04-05", "Masculin");
$ja = new Acteur("ALBA", "Jessica", "1981-04-28", "Féminin");
$km = new Acteur("MARA", "Kate", "1983-02-27", "Féminin");
$gl = new Acteur("LELLOUCHE", "Gilles", "1972-07-05", "Masculin");

//Realisateur

$ss = new Realisateur("SPIELBERG", "Steven", "1963-10-03", "Masculin");
$cj = new Realisateur("JIMENEZ", "Cédric", "1972-07-05", "Masculin");
$ts = new Realisateur("STORY", "Tim", "1970-03-13", "Masculin");
$jt = new Realisateur("TRANK", "Josh", "1984-02-19", "Masculin");

// Genre

$ac = new Genre("Action");
$sf = new Genre("Science-fiction");
$co = new Genre("Comedie");

// Film

$fourfantastic2 = new Film($ts, $co, "Les 4 Fantastiques et le surfer d'argent", "2007-08-08", 92, "Alors que le mariage de Mr Fantastic et de la Femme Invisible s'annonce comme l'événement de l'année, un mystérieux Surfer d'Argent surgit de l'espace et provoque d'étranges phénomènes sur la Terre.
Rapidement, les 4 Fantastiques vont découvrir le dessein secret de cet être aux pouvoirs surprenants et la menace qu'il fait peser sur notre planète, mais ils vont aussi voir ressurgir leur ennemi juré...
Face au danger, amis et ennemis vont devoir unir leurs forces comme jamais.");
$fourfantastic3 = new Film($jt, $co, "Les Fant4stiques", "2015-08-05", 101, "Adaptation moderne et résolument nouvelle de la plus ancienne équipe de super-héros Marvel, le film se concentre sur quatre jeunes génies qui se retrouvent projetés dans un univers alternatif et dangereux, qui modifie leurs formes physiques mais aussi leurs vies de façon radicale. Ils devront apprendre à maîtriser leurs nouvelles capacités et à travailler ensemble pour sauver la Terre d'un ancien allié devenu leur ennemi.");
$armageddon = new Film($ss, $sf, "Armageddon", "1998-08-05", 148, "Alors qu'un astéroide géant se dirige vers la Terre, un spécialiste du forage pétrolier et son équipe de têtes brûlées s'entraînent pour aller poser une charge au coeur du caillou spatial.");
$sincity = new Film($ss, $sf, "Sin City", "2005-06-01", 123, "Dwight est l'amant secret de Shellie. Il passe ses nuits à protéger Gail et les filles des bas quartiers de Jackie Boy, un flic pourri, violent et incontrôlable. Certains ont soif de vengeance, d'autres recherchent leur salut. Bienvenue à Sin City, la ville du vice et du péché.");
$bacnord = new Film($cj, $ac, "Bac Nord", "2021-08-18", 164, "Poussée par sa hiérarchie, la BAC Nord, brigade de terrain, cherche sans cesse à améliorer ses résultats. Dans un secteur à haut risque, les flics adaptent leurs méthodes, franchissant parfois la ligne rouge. Jusqu'au jour où le système judiciaire se retourne contre eux...");

// Casting

$c1 = new Casting($fourfantastic2, $storm, $ja);
$c2 = new Casting($fourfantastic3, $storm, $km);
$c3 = new Casting($armageddon, $stamper, $bw);
$c4 = new Casting($sincity, $callahan, $ja);
$c5 = new Casting($bacnord, $cerva, $gl);

//Echo
?>
<h1>Exo POO Cinema</h1>
<?php
//echo $bw->getInfos()."<br>";
//echo $ja->getIdentity()."<br>";
?>
<h3>Liste des rôles par acteur :</h3><?php
echo $storm->afficherParRole();
echo $stamper->afficherParRole();
?>
<h3>Casting d'un film :</h3><?php
echo $sincity->afficherCastingfilm();
echo $fourfantastic3->afficherCastingfilm();
?>
<h3>Liste de films par genre :</h3><?php
echo $sf->afficherParGenre();
echo $ac->afficherParGenre();
echo $co->afficherParGenre();
?>
<h3>Filmographie d'un acteur</h3><?php
echo $bw->afficherFilmographieActeur();
?>
<h3>Filmographie d'un réalisateur</h3><?php
echo $ss->afficherFilmographie();
