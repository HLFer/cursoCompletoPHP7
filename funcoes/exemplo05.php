<?php


$a = 10;

function trocaValor($a){

	$a += 50;

	return $a;

	//Nesse caso, o que acontece na função permanece na função. Escopo local.

	//Para passagem de parametro por referência utiliza-se o &. Ex: &$a

}

echo trocaValor($a);

echo "<br>";

echo $a;

?>