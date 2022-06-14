<?php include_once("../partials/verificaLoginMetodos.php") ?>

<!DOCTYPE html>
<html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BrothersBurguers | Clientes</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body style="margin: auto; width: 800px" >

		<?php
		include '../conexao.php'; 

		$acao=$_GET["acao"];

		if ($acao == "Incluir")
		{
			$id=0;
			$nome="";
			$endereco="";
			$telefone="";
		}
		else
		{
			$id=$_GET["id"];
			
			$sql = "SELECT * 
			FROM cliente
			WHERE id=".$id;
			$tabela = mysqli_query($conexao,$sql);
			$linha = mysqli_fetch_array($tabela);
			
			$nome=$linha['nome'];
			$endereco=$linha['endereco'];
			$telefone=$linha['telefone'];
		}
		?>
		<form name="dados" method="post" action="../cadastro/cadastroCliente.php?id=<?php echo $id; ?>">
			<legend>Dados do Cliente</legend>
			<div class="mb-3">
				<label for="nome" class="form-label">Nome:</label>
				<input type="text" required class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" aria-describedby="emailHelp"><br>
				<label for="endereco" class="form-label">Endereço:</label>
				<input type="text" required class="form-control" id="endereco" name="endereco" value="<?php echo $endereco; ?>"><br>
				<label for="telefone" class="form-label">Telefone:</label>
				<input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>"><br>
				<button type="submit" class="btn btn-primary" name="acao" value="<?php echo $acao; ?>">Enviar</button>
				<a class="btn btn-primary" href="../clientes.php">Cancelar</a>
			</div>
		</form>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>