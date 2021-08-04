<?php

//modulos-Start
//include("../../controle/controle_cliente.php");
include("../../controle/controle_login.php");
//modulos-End

//Recebe valores - Start
$email = $_POST["email"];
$senha = $_POST["senha"];
$acao  = $_POST["acao"];
//Recebe valores - End

//Instanciar classe cliente - Start
//$obj_cliente = new Cliente();
$obj_login   = new Login();
//Instanciar classe cliente - End
	
if($acao == "logar"){
	// Chama metodo - Start
	$result = $obj_login->verificar($email,$senha);
	// Chama metodo - End
	
	if($result == 1){
		
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['result'] = $result;
	}else{
		
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
	}
	
	echo $result ;
}
	
?>	
	