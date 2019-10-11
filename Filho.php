<?php

include ("Pessoa.php");

class Filho extends Pessoa{
	private $time;

	public function getTime(){
		return $this->time;
	}

	public function setTime(){
		$this->time=$time;
	}
}