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

$team1 = new Team("PSG");
$team2 = new team("OM");

$joueur1 = new Player("Kylian", "Mbappé", "20.12.1998", $nationality1, $team1); // PSG,AS Monaco
$joueur2 = new Player("Dimitri", "Payet", "29.03.1987", $nationality1, $team2); //OM, West Ham United
$joueur3 = new Player("Pedro", "Ruiz", "30.03.2000", $nationality2, $team2); //OM, Real Madrid
$joueur4 = new Player("Sergio", "Ramos", "30.03.1986", $nationality2, $team1); //PSG, Real Madrid

echo $joueur1->getPlayer();
echo $joueur2->getPlayer();
echo $joueur3->getPlayer();
echo $joueur4->getPlayer() . "<br>";

echo $nationality1->displayNationality() . "<br>";
echo $nationality2->displayNationality() . "<br>";

echo $team1->displayTeam() . "<br>";
echo $team2->displayTeam() . "<br>";
