<?php

$id = $_GET['id'];

echo $id;

include_once 'conexao.php';

$result = $conn->query("DELETE FROM cadastrar_clientes where idCliente = '{$id}'");

	if($result){
		header("location:listar.php");
	}else{
		echo "Erro ao apagar registro";
	}

