<?php include("../controle/controle_cliente.php")?>
<?php $idCliente = $_POST['idCliente'];	
//echo $idCliente;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
	$obj_cliente = new Cliente();		
	$arrayCliente = $obj_cliente->busca($idCliente);
	
?>
<body>
<form >
<input type="button" onClick="telaPrincipal()" value="Tela Principal" >
<br>
	<form action="" >
		Nome: <input type="text" name="nome" id="nomeCliente"  value="<?php echo $arrayCliente[0]['nomeCliente']?>" ><br>
		Idade: <input type="text" name="idade" id="idadeCliente" value="<?php echo $arrayCliente[0]['idadeCliente']?>" ><br>
		Sexo: <input type="text" name="sexo" id="idSexo" value="<?php echo $arrayCliente[0]['idSexo']?>" ><br>	
		Cidade: <input type="text" name="ciade" id="idCidade" value="<?php echo $arrayCliente[0]['idCidade']?>" ><br>	
		Estado: <input type="text" name="estado" id="idEstado" value="<?php echo $arrayCliente[0]['idEstado']?>" ><br>
		Pais: <input type="text" name="pais" id="idPais" value="<?php echo $arrayCliente[0]['idPais']?>" ><br>	
		<input type="hidden" name="id" id="idCliente" value="<?php echo $arrayCliente[0]['idCliente']?>"><br>
		
		<input type="button" onClick="telaListar()" value="Voltar" >
		<input type="button"  id="atualizarBtn" onClick="atualizar()" id="acao" value="Alterar" >
		<input type="hidden" name="acao" id="acao" value="atualizar">
	</form>
	<br>	
</body>
</html>