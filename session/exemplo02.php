<?php

require_once("config.php");

session_unset($_SESSION['nome']);//Limpa a variável - Se não indicar a variavel, limpa toda $_SESSION

echo $_SESSION['nome'];

//session_destroy($_SESSION['nome']); - Limpa a variável e remove o usuário.

?>