<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){
	

	$cmd = escapeshellcmd($_POST["cmd"]);

	var_dump($cmd);

	echo "<pre>";

	//Utilizando o Linux -> C: inexistente
	$comando = system("dir /", $retorno);

	echo "</pre>";

	}

?>

<form method="POST">
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>