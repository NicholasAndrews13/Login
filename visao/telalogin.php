<html>
<head>
<meta charset="utf-8">
<title> Login de Usuário </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/javascript" src="../js/login.js"></script>	
</head>
	
<body>
<form>
	<fieldset id="vaso">
		<label>Login</label><br>
		<label>E-mail:</label>
		<input type="text" name="email" id="email"><br>
		<label>Senha:</label>
		<input type="password" name="senha" id="senha"><br><br>
	
		<input type="hidden" name="acao" id="acao" value="logar">
		<input type="button" onClick="verificar();" value="Entrar" >
	</fieldset>
</form>
</body>
</html>