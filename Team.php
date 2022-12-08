<?php

class Team
{
	private $_team;
	private $_country;


	public function __construct($team, $country)
	{
		$this->_team = $team;
		$this->_listathlete = [];
		$this->_country = $country;
		$this->_country->addTeam($this);
	}

	public function getTeam()
	{
		return $this->_team . " " . $this->_country;
	}

	public function addAthlete($athlete)
	{
		$this->_listathlete[] = $athlete;
	}

	public function displayTeam()
	{
		$result = "Les joueurs de $this sont :" . "<br>";
		foreach ($this->_listathlete as $athlete) {
			$result .= $athlete . "<br>";
		}
		return $result;
	}

	public function displayCountry()
	{
		return $this->_country;
	}

	public function __toString()
	{
		return $this->getTeam();
	}
}
