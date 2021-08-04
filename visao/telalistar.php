<?php
include("../controle/controle_cliente.php")

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar Clientes</title>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
	<?php
	//instanciar classe cliente - Start
	$obj_cliente = new Cliente();	
	//instanciar classe cliente - End
	$arrayCliente = $obj_cliente->busca();
	?>
	
<body>
<input type="button" onClick="telaPrincipal()" value="Tela Principal" >
	<table border="1">
	<tr>
		<td>ID</td>
		<td>Nome</td>
		
		<td style=" text-align: center">Ação</td>
	</tr>
		
	<?php
		
	foreach($arrayCliente as $value){
		
	?>
		<tr>
			<td><?php echo $value['idCliente']?></td>
			<td><?php echo $value['nomeCliente']?></td>
	
			<td><input type="button" onClick="telaEditando(<?php echo $value['idCliente'] ?>)" value="Editar">&nbsp;&nbsp;&nbsp;
				<input type="button" onClick="deletar(<?php echo $value['idCliente'] ?>)" value="Deletar"</td>
		</tr>	
	<?php	
	}	
	?>
</table>
<br>
</form>	
</body>
</html>