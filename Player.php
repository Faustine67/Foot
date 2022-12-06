<?php

class Player
{

	private $_firstname;
	private $_name;
	private $_birthdate;
	private $_nationality;

	public function __construct($name, $firstname, $birthdate,$nationality)
	{
		$this->_name = $name;
		$this->_firstname = $firstname;
		$this->_birthdate = $birthdate;
		$this->_nationality =$nationality;
		$this->_nationality-> addPlayer($this);
	}

	function getPlayer()
	{
		return $this->_name . " " . $this->_firstname . " " . $this->_birthdate . " ". $this->_nationality. "<br>";
	}
public function __toString(){
	return $this->_name . " " . $this->_firstname . " " . $this->_birthdate . " ". $this->_nationality."<br>";
}
}