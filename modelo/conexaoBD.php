<?php
	/// modelo - start
	/// Conexao Banco
class ConexaoBD{
	
	public function con(){
		
	$conectar =  mysqli_connect("localhost","root","") or die(mysqli_error());
	// Seleciona Banco
	mysqli_select_db($conectar,"projeto")or die(mysqli_error());
	/// modelo - end
	return $conectar;
	}
}

?>
