<?php

class Mercato
{
	private $_player;
	private $_team;
	private $_date;

	public function __construct(Player $player, Team $team, $date)
	{
		$this->_player = $player;
		$this->_player->addMercato($this);
		$this->_team = $team;
		$this->_team->addMercato($this);
		$this->_date = $date;
	}

	public function getPlayer()
	{
		return $this->_player;
	}
	public function getTeam()
	{
		return $this->_team;
	}
	public function getDate()
	{
		return $this->_date;
	}
	public function __toString()
	{
		return $this->_player . $this->_team . $this->_date;
	}
}
