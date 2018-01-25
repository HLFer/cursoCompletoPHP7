<?php

class Pessoa {

	public $nome;//Atributo

	public function falar(){//Método

		return "O menu nome é ".$this->nome;

	} 

}


$henrique = new Pessoa;

$henrique->nome = "Henrique Fernandes";

echo $henrique->falar();

?>