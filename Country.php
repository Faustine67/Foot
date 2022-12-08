<?php

class Country
{

	private $_country;
	private $_listTeam;

	public function __construct($country)
	{
		$this->_country = $country;
		$this->_listTeam = [];
	}

	public function getCountry()
	{
		return $this->_country;
	}

	public function addTeam($team)
	{
		$this->_listTeam[] = $team;
	}
	public function displayCountry()
	{
		$result = "L'équipe venant de $this sont :<br>";
		foreach ($this->_listTeam as $team) {
			$result .= $team . "<br>";
		}
		return $result;
	}
	public function __toString()
	{
		return $this->getCountry();
	}
}
