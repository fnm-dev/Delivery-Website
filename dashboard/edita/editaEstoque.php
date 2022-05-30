<!DOCTYPE html>
<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BrothersBurguers | Estoque</title>
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
		$qtde="";
		$peso="";
	}
	else
	{
		$id=$_GET["id"];
		
		$sql = "SELECT * 
		FROM estoque 
		WHERE id=".$id;
		$tabela = mysqli_query($conexao,$sql);
		$linha = mysqli_fetch_array($tabela);
		
		$nome=$linha['nome'];
		$qtde=$linha['qtde'];
		$peso=$linha['peso'];
	}
	?>

	<form name="dados" method="post" action="../cadastro/cadastroEstoque.php?id=<?php echo $id; ?>">
		<legend>Estoque</legend>
		<div class="mb-3">
			<label for="nome" class="form-label">Nome:</label>
			<input type="text" required class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" aria-describedby="emailHelp"><br>
			<label for="qtde" class="form-label">Quantidade:</label>
			<input type="number" required class="form-control" id="qtde" name="qtde" value="<?php echo $qtde; ?>"><br>
			<label for="peso" class="form-label">Peso:</label>
			<input type="number" class="form-control" id="peso" name="peso" value="<?php echo $peso; ?>"><br>
			<button type="submit" class="btn btn-primary" name="acao" value="<?php echo $acao; ?>">Enviar</button>
			<a class="btn btn-primary" href="../estoque.php">Cancelar</a>
		</div>

	</form>





</body>
</html>
<?php
mysqli_close($conexao);
?>