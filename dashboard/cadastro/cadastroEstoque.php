<?php
	$acao=$_POST['acao'];

	if ($acao == "Cancelar")
	{
		
	}
	else
	{
		include '../conexao.php'; 

		$id=$_GET['id'];
		$nome=$_POST['nome'];
		$qtde=$_POST['qtde'];
		$peso=$_POST['peso'];
 
		switch ($acao) {
			case "Alterar":
				$sql = "UPDATE estoque SET 
						nome='$nome', 
						peso='$peso' 
						WHERE id='$id'";
				break;
			
			case "Excluir":
				$sql = "DELETE FROM estoque 
						WHERE id='$id'";
				break;
			
			case "Incluir":
				$sql = "INSERT INTO estoque 
						(nome, qtde, peso) 
						VALUES 
						('$nome', '$qtde', '$peso')";
				break;
		}
		$tabela = mysqli_query($conexao,$sql) or die (mysqli_error());            
		
		mysqli_close($conexao);
	}
	header("Location: ../estoque.php");
?>
