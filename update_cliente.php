<?php

$cliente = array();

$cliente = $_POST;

include_once 'conexao.php';

$result = $conn->query("UPDATE cadastrar_clientes SET nome = '{$cliente['nome']}', endereco = '{$cliente['endereco']}', telefone = '{$cliente['telefone']}', email = '{$cliente['email']}' WHERE idCliente = '{$cliente['id']}'");

if($result){
	header("location:listar.php");
}else{

	echo "Erro ao alterar registro! ";

}