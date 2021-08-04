<?php
// load modelo - Start
require_once( $_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php") ;

// Load modelo - End

class Login{
	
	public function verificar($email,$senha){ 
		
	$obj_con = new ConexaoBD();
	$conectar=$obj_con->con();
	// Instruções sql select --Start
	
	$sql = "SELECT * FROM usuario WHERE emailUsuario = '".$email."' AND senhaUsuario = '".$senha."'";
	
	$resultado = mysqli_query($conectar,$sql) ;
	$linha     = mysqli_num_rows($resultado);
	
	return $linha;
	}
	
}
?>