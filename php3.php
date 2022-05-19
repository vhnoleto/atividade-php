<?php

	$usuario = "etecia";
	$senha = "etecia238";
	if ($_POST['user'] == $usuario && $_POST['pass'] == $senha) {
		echo "Autenticação  realizada  com  sucesso";
	}
	else {
		echo "Você não tem permissão de visualizar essa página";
	}
?>