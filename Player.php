<?php

class Player
{

	private $_firstname;
	private $_name;
	private $_birthdate;
	private $_nationality;
	private $_team;
	private $_listMercato;

	public function __construct($name, $firstname, $birthdate, $nationality, $team)
	{
		$this->_name = $name;
		$this->_firstname = $firstname;
		$this->_birthdate = $birthdate;
		$this->_nationality = $nationality;
		$this->_nationality->addPlayer($this);
		$this->_team = $team;
		$this->_team->addAthlete($this);
		$this->_listMercato = [];
	}
	public function getPlayer()
	{
		return $this->_name . " " . $this->_firstname . " " . $this->_birthdate . " " . $this->_nationality . $this->_team;
	}
	public function addMercato($mercato)
	{
		$this->_listMercato[] = $mercato;
	}
	public function displayMercato()
	{
		$result = "$this";
		foreach ($this->_listMercato as $mercato) {
			$result .= $mercato . "<br>";
		}
		return $result;
	}
	public function displayTeam()
	{
		return $this->_team;
	}

	public function __toString()
	{
		return $this->_name . " " . $this->_firstname . " " . $this->_birthdate . " " . $this->_nationality . $this->_team;
	}
}
