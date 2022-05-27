<?php
	include 'conexao.php'; 
?>
<html>
	<head>
		<title>Brothers Burguer</title>
	</head>
	<body>
		<table align=center border=1 width=50%>
			<tr>
				<td align=center colspan=5>Estoque:</td>
			</tr>
				<td align="center">
					<b>ID</b>
				</td>
				<td><b>Nome</b></td>
				<td><b>Quantidade</b></td>
				<td><b>Peso</b></td>
				<td align="center" colspan="2">
					<a href="edita.php?acao=Incluir"><b>Cadastrar</b></a>
				</td>
			</tr>
<?php
	// Fazendo uma consulta SQL
	$sql = "SELECT * 
			FROM estoque 
			ORDER BY nome";
	$tabela = mysqli_query($conexao,$sql);
	while ($linha = mysqli_fetch_array($tabela))
	{
?>
			<tr>
				<td align="center">
					<?php echo $linha['id']; ?>
				</td>
				<td>
					<?php echo $linha['nome']; ?>
				</td>
				<td>
					<?php echo $linha['qtde']; ?>
				</td>
				<td>
					<?php echo $linha['peso']; ?>
				</td>
				<td width=50 align="center">
					<a href="edita.php?acao=Alterar&id=<?php echo $linha['id']; ?>" >
						<img src="imagens/alterar.png" border="0">
					</a>
				</td>
				<td width=50 align="center">
					<a href="edita.php?acao=Excluir&id=<?php echo $linha['id']; ?>">
						<img src="imagens/excluir.png" border="0">
					</a>
				</td>
			</tr>
<?php
	}
?>
		</table>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>