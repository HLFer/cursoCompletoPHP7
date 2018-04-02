<form method="POST">
	<input type="text" name ="Busca">
	<button type="submit">Enviar</button>
</form>

<?php

if(isset($_POST['Busca'])){
	//Função para eliminar as tags indesejadas, digitadas por um invasor.
	echo strip_tags($_POST['Busca']);

	//Função para escrever as tags na tela, mas não interprete-as
	echo htmlspecialchars($_POST['Busca']);
}

?>