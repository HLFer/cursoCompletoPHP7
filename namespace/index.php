<?php

	require_once ("config.php");

	use Cliente/Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Henrique Fernandes");
	$cad->setEmail("henriquedin@hotmail.com");
	$cad->setSenha(123456);

	$cad->registrarVenda();

	echo $cad;



?>