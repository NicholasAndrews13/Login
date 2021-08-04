<?php
session_start();//abre sessao
if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
	 unset($_SESSION['email']);
	 unset($_SESSION['result']);
	
	header('location:/index.php');
	}
?>
<?php include("../controle/controle_cliente.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Tela principal </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../js/cliente.js"></script>	
</head>
<body>
<form>

<br>&nbsp;&nbsp;&nbsp;
<input type="button" onClick="telaListar()" value="Lista de clientes" >&nbsp;&nbsp;&nbsp;
<input type="button" onClick="telaCadastrar()" value="Cadastrar cliente" >&nbsp;&nbsp;&nbsp;
<input type="button" onClick="telaEditar()" value="Buscar cliente" >&nbsp;&nbsp;&nbsp;
</form>
</body>
</html>