<?php
// Load Modelo - Start
include( $_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php") ;

// Load Modelo - End

class Cliente{
	
	public function busca($idCliente = false){
		/* Instruçoes sql*/
		$obj_con  = new ConexaoBD ;
		$conectar = $obj_con->con() ;
		
		$sql = "SELECT * FROM cliente " ;
		
		if($idCliente>0){
		
		$sql .= "WHERE idCliente = ".$idCliente ;
		
		}
		
	$resultado = mysqli_query($conectar,$sql) ;
	$r = 0 ;	
	while($dados = mysqli_fetch_assoc($resultado)){
		$linha[$r]['idCliente']    = $dados['idCliente'] ;
		$linha[$r]['nomeCliente']  = $dados['nomeCliente'] ;	
		$linha[$r]['idadeCliente'] = $dados['idadeCliente'] ;
		$linha[$r]['idSexo']       = $dados['idSexo'] ;
		$linha[$r]['idCidade']     = $dados['idCidade'] ;
		$linha[$r]['idEstado']     = $dados['idEstado'] ;
		$linha[$r]['idPais']       = $dados['idPais'] ;
		$r++ ;				
		}
		
		return $linha ;
	}
	
	public function insere($nomeCliente,$idadeCliente,$idSexo,$idCidade,$idEstado,$idPais){
		
		$resultado = true ;
		$obj_con = new ConexaoBD ;
		$conectar= $obj_con->con() ;
		
		$sqlInsert = "	INSERT INTO cliente
		(nomeCliente, idadeCliente, idSexo, idCidade, idEstado, idPais
		) VALUES (
		'".$nomeCliente."',".$idadeCliente.",'".$idSexo."','".$idCidade."','".$idEstado."','".$idPais."');
		" ;
		$resultado = mysqli_query($conectar,$sqlInsert)or die($resultado = false) ;
	/*
	if($resultado === false){		
		return false ;
	}else{
		return true ;
		}*/
		
		//return 3434;
	}
	
	public function atualizar($idCliente,$nomeCliente,$idadeCliente,$idSexo,$idCidade,$idEstado,$idPais){
		
		$resultado = true ;
		$obj_con   = new ConexaoBD ;
		$conectar  = $obj_con->con() ;
		
		$sqlUpdate = "UPDATE cliente SET nomeCliente = '".$nomeCliene."',idadeCliente ='".$idadeCliente."', idSexo='".$idSexo."', idCidade = '".$idCidade."', idEstado = '".$idEstado."', idPais = '".$idPais."' WHERE idCliente = ".$idCliente ;
		$resultado = mysqli_query($conectar,$sqlUpdate)or die($resultado = false) ;
		
		//return($sqlUpdate);
		}		
	
	public function deletar($id){
		
		$resultado = true ;
		$obj_con   = new ConexaoBD ;
		$conectar  = $obj_con->con() ;
		
		$sqlDeletar ="DELETE FROM cliente WHERE idCliente = ".$id ;
		$resultado = mysqli_query($conectar,$sqlDeletar)or die($resultado = false) ;
	}
}

class sexo{

	public function select($id = false){

		$obj_con = new ConexaoBD();
		$connect = $obj_con->con();
		
		
		$sql = "SELECT * from sexo ";
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		
		while($data = mysqli_fetch_assoc($result)){
			$linha[$r]['idSexo'] = $data['idSexo'];
			$linha[$r]['descrSexo'] = $data['descrSexo'];
			$r++;
		}
		
		return $linha;
	}
}

class Cidade{

	public function select($id = false){

		$obj_con   = new ConexaoBD();
		$connectar = $obj_con->con();
				
		$sql = "SELECT * from cidade ";
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		
		while($data = mysqli_fetch_assoc($result)){
			$linha[$r]['idCidade']   = $data['idCidade'];
			$linha[$r]['nomeCidade'] = $data['nomeCidade'];
			$r++;
		}
		
		return $linha;
	}
}

class estado{

	public function select($id = false){

		$obj_con = new ConexaoBD();
		$connect = $obj_con->con();
		
		
		$sql = "SELECT * from estado ";
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		
		while($data = mysqli_fetch_assoc($result)){
			$linha[$r]['idEstado']   = $data['idEstado'];
			$linha[$r]['nomeEstado'] = $data['nomeEstado'];
			$r++;
		}
		
		return $linha;
	}
}

class pais{

	public function select($id = false){

		$obj_con = new ConexaoBD();
		$connect = $obj_con->con();
		
		
		$sql = "SELECT * from pais ";
		
		$result = mysqli_query($connect,$sql);
		$r = 0;
		
		while($data = mysqli_fetch_assoc($result)){
			$linha[$r]['idPais']   = $data['idPais'];
			$linha[$r]['nomePais'] = $data['nomePais'];
			$r++;
		}
		
		return $linha;
	}
}
?>
