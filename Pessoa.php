<?php

class Pessoa implements JsonSerializable {
	private $altura;
	private $idade;
	private $peso;

	public function getPeso(){
		return $this->peso;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura(){
		$this->altura = $altura;
	}

	public function setIdade(){
		$this->idade = $idade;
	}

	public function setPeso(){
		$this->peso = $peso;
	}

	public function __construct($peso, $idade, $altura){
		$this->peso = $peso;
		$this->idade = $idade;
		$this->altura = $altura;
	}

	public function __toString(){
		$string = 
			"Peso ".$this->peso."<br>".
			"Idade ".$this->idade."<br>".
			"Altura ".$this->altura."<br>";
		return $string;
	}

	public function JsonSerialize(){
		return  [			
				"Peso" => $this->peso,
				"Idade" => $this->idade,
				"Altura" => $this->altura			
		];
	}
}