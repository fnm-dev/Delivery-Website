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
		$endereco=$_POST['endereco'];
		$telefone=$_POST['telefone'];
 
		switch ($acao) {
			case "Alterar":
				$sql = "UPDATE cliente SET 
						nome='$nome', 
						endereco='$endereco', 
                        telefone='$telefone'
						WHERE id='$id'";
				break;
			
			case "Excluir":
				$sql = "DELETE FROM cliente 
						WHERE id='$id'";
				break;
			
			case "Incluir":
				$sql = "INSERT INTO cliente
						(id, nome, endereco, telefone) 
						VALUES 
						('$nome', '$endereco', '$telefone')";
				break;
		}
		$tabela = mysqli_query($conexao,$sql) or die (mysqli_error());            
		
		mysqli_close($conexao);
	}
	header("Location: ../clientes.php");
?>
