<?php

abstract class Animal{

	public function falar(){
		return "Emitir som";
	}

	public function mover(){
		return "Caminhar";
	}

}

class Cachorro extends Animal{

	public function falar(){
		return "Latir";
	}

}

class Gato extends Animal{

	public function falar(){
		return "Miar";
	}

}

class Passaro extends Animal{

	public function mover(){
		return "Voar e " . parent::mover();
	}
}

$costelinha = new Cachorro;

echo $costelinha->falar() . "<br/>";
echo $costelinha->mover() . "<br/>";

echo "-------------------------------<br/>";

$garfield = new Gato;
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------------<br/>";

$ave = new Passaro;
echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";

?>