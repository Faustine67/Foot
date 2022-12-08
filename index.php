<p>
	Soit une application qui gère des équipes de football
	Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) et un ensemble de joueurs identifié par un prénom, un nom et une date de naissance <br>
	Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, Espagne, Allemagne, ...)<br>
	Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison)<br>
	Concevez le projet en POO de façon à :<br>
	- lister toutes les équipes d'un pays<br>
	Ex : France --> PSG, OM, OL, RCSA, ...<br>
	- lister tous les joueur s d'une équipe (avec nom, prénom, âge et pays d'origine)<br>
	Ex : PSG --> Neymar JR (30 ans), Lionel Messi (35 ans), Kylian Mbappé (23 ans)<br>
	- lister toutes les équipes d'un joueur<br>
	Ex : Lionel Messi (FC Barcelone 2004, PSG 2021)<br>
</p>
<?php

spl_autoload_register(function ($class_name) {

	require_once $class_name . '.php';
});

$nationality1 = new Nationality("Fr");
$nationality2 = new Nationality("Es");

$country1 = new Country("France");
$country2 = new Country("Espagne");
$country3 = new Country("Angleterre");

$team1 = new Team("PSG", $country1);
$team2 = new team("OM", $country1);
$team3 = new Team("Real Madrid", $country2);
$team4 = new Team("West Ham United", $country3);


$joueur1 = new Player("Kylian", "Mbappé", "20.12.1998", $nationality1, $team1); // PSG,AS Monaco
$joueur2 = new Player("Dimitri", "Payet", "29.03.1987", $nationality1, $team2); //OM, West Ham United
$joueur3 = new Player("Pedro", "Ruiz", "30.03.2000", $nationality2, $team2); //OM, Real Madrid
$joueur4 = new Player("Sergio", "Ramos", "30.03.1986", $nationality2, $team1); //PSG, Real Madrid


$mercato1 = new Mercato($joueur1, $team1, "2022");

"<p>";
echo $joueur1->getPlayer() . "<br>";
echo $joueur2->getPlayer() . "<br>";
echo $joueur3->getPlayer() . "<br>";
echo $joueur4->getPlayer() . "<br>" . "<br>";
"</p>";
"<p>";
echo $nationality1->displayNationality() . "<br>";
echo $nationality2->displayNationality() . "<br>";
"</p>";
"<p>";
echo $team1->displayTeam() . "<br>";
echo $team2->displayTeam() . "<br>";
"</p>";
"<p>";
echo $country1->displayCountry() . "<br>";
echo $country2->displayCountry() . "<br>";
echo $country3->displayCountry() . "<br>";
"</p>";
"<p>";
echo $joueur1->displayMercato() . "<br>";
echo $team1->displayMercato() . "<br>";
