<?php

class Team
{
	private $_team;


	public function __construct($team)
	{
		$this->_team = $team;
		$this->_listathlete = [];
	}

	public function getTeam()
	{
		return $this->_team;
	}

	public function addAthlete($athlete)
	{
		$this->_listathlete[] = $athlete;
	}

	public function displayTeam()
	{
		$result = "Les joueur de $this sont :<br>";
		foreach ($this->_listathlete as $athlete) {
			$result .= $athlete;
		}
		return $result;
	}
	public function __toString()
	{
		return $this->getTeam();
	}
}
