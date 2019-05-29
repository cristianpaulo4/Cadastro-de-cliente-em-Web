<?php

include_once 'conexao.php';

$cliente = array();

$cliente = $_POST;

$result = $conn->exec("INSERT INTO cadastrar_clientes(nome, endereco, telefone, email)VALUES ('{$cliente['nome']}', '{$cliente['endereco']}','{$cliente['telefone']}','{$cliente['email']}')");

	if ($result){
		header("location:index.html");

	}else{
		echo "Erro no cadastro!";
	}















