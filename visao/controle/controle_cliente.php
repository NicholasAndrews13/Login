<?php
// Modulos - Start
include_once("../../controle/controle_cliente.php");
// Modulos - End

// Recebe valores - start
$nomeCliente  = $_POST["nomeCliente"];
$idadeCliente = $_POST["idadeCliente"];
$idSexo       =	$_POST["idSexo"];
$idCidade     = $_POST["idCidade"];
$idEstado     = $_POST["idEstado"];
$idPais       = $_POST["idPais"];
$idCliente    = @$_POST["id"];
$acao         = $_POST["acao"];
//Recebe valores - end
$obj_cliente = new Cliente();

if($acao == "insere"){
	
	// chama metodo - Start
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente,$idSexo,$idCidade,$idEstado,$idPais);
	echo $result;
	// chama metodo - End	
	
}else if ($acao == "atualizar"){
	
	$result = $obj_cliente->atualizar($nomeCliente,$idadeCliente,$idSexo,$idCidade,$idEstado,$idPais);
	//echo $result;		
}

else if( $acao == "deletar"){
	
	$result = $obj_cliente->deletar($idCliente);
}
?>
