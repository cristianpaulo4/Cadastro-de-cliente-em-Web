<?php


echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>";




include_once 'conexao.php';

$id = $_GET['id'];


$result = $conn -> query("SELECT  *FROM cadastrar_clientes WHERE idCliente = '{$id}'");
	if ($result){
		$linha = $result->fetch();
		$id = $linha['idCliente'];
		$nome = $linha['nome'];
		$endereco = $linha['endereco'];
		$tel = $linha['telefone'];
		$email = $linha['email'];
}


?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	

	</style>
</head>
<body>		
<a href="index.html">Voltar</a>	

		<br>
		<br>
		<br>
		<br>
		<div class="container" style="width: 50%">
			<h3>Atualizar dados do cliente</h3>
			<form method="POST" action="update_cliente.php">
			<label>Nome do cliente</label><br>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<input class="form-control" type="text" name="nome" value="<?php echo $nome ?>"><br>
			<label>Endereço</label><br>
			<input class="form-control" type="text" name="endereco" value="<?php echo $endereco?>"><br>
			<label>Telefone</label><br>
			<input class="form-control" type="text" name="telefone" value="<?php echo $tel?>"><br>
			<label>Email</label><br>
			<input class="form-control" type="email" name="email" value="<?php echo $email ?>"><br>
			<a href="listar.php">Listar</a>	
			<input type="submit" name="Enviar" value="Alterar">
			

		</form>	
			



		</div>
	
		


</body>
</html>








