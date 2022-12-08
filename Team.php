<?php

class Team
{
	private $_team;
	private $_country;
	private $_listMercato;

	public function __construct($team, $country)
	{
		$this->_team = $team;
		$this->_listathlete = [];
		$this->_country = $country;
		$this->_country->addTeam($this);
		$this->_listMercato = [];
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
	public function addMercato($mercato)
	{
		$this->_listMercato[] = $mercato;
	}
	public function displayMercato()
	{
		$result = $this->getTeam();
		foreach ($this->_listMercato as $mercato) {
			$result .= $mercato . "<br>";
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
