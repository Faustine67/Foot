<?php

class Nationality
{
	private $_nationality;

	public function __construct($nationality)
	{
		$this->_nationality = $nationality;
		$this->_listPlayer = [];
	}

	public function getNationality()
	{
		return $this->_nationality;
	}

	public function addPlayer($player)
	{
		$this->_listPlayer[] = $player;
	}

	public function displayNationality()
	{
		$result = "Les joueurs de nationalité $this sont" . "<br>";
		foreach ($this->_listPlayer as $player) {
			$result .= $player . "<br>";
		}
		return $result;
	}
	public function __toString()
	{
		return $this->getNationality();
	}
}
