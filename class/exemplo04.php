<?php

	class Endereco{

		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b,$c){

			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;

		}

		public function __destruct(){

			//var_dump("Método destrutor!");

		}

		public function __toString(){

			return $this->logradouro.", ". $this->numero." - ".$this->cidade."<br>";

		}

	}

$meuendereco = new Endereco("Rua exemplo", "123", "Salvador");

/*
echo "<pre>";
var_dump($meuendereco);
echo "</pre>";
*/

echo $meuendereco;

//unset($meuendereco);

?>