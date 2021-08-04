<?php
include("../controle/controle_cliente.php")

?>
<html>
<head>
<title> Tela Cadastrar </title>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
	
<body>
<form >

<input type="button" onClick="telaPrincipal()" value="Tela Principal" >


<br>
<label>Cadastrar:</label><br>
<label>Nome:</label><input type="text" name="cliente" id="nomeCliente"><br>
<label>Idade:</label><input type="text" name="idade" id="idadeCliente"><br>
<label>Sexo:</label><input type="text" name="sexo" id="idSexo"><br>
<label>Cidade:</label><input type="text" name="cidade" id="idCidade"><br>
<label>Estado:</label><input type="text" name="estado" id="idEstado"><br>
<label>Pais:</label><input type="text" name="pais" id="idPais"><br>
<br>
<input type="submit" value="Limpar" id="Limpar" name="Limpar"><input type="hidden" name="limpar" id="limpar" value="limpar">
		<input type="button" id = "inserir" onClick="cadastrar()" value="Cadastrar" >
		<input type="hidden" name="acao" id="acao" value="insere">
</form>
</body>
</html>