function telaPrincipal(){
	//console.log('Foi para a tela principal');	
	window.location.href = 'telaprincipal.php' ;
	
}

function telaListar(){
		
	//console.log('Foi para a tela de listar');	
	window.location.href = 'telalistar.php' ;
}

function telaCadastrar(){
	//console.log('Foi para a tela de cadastro');	
	window.location.href = 'telacadastrar.php' ;
	
}

function telaEditar(){
	//console.log('Foi para a tela de editar');	
	window.location.href = 'telaeditar.php' ;
	
}
function telaEditando(){
	//console.log('Foi para a tela de editar');	
	window.location.href = 'telaeditando.php' ;
	
}

function cadastrar(){	
	
	var nomeCliente  = $('#nomeCliente').val();
	var idadeCliente = $('#idadeCliente').val();
	var idSexo    	 = $('#idSexo').val();
	var idCidade  	 = $('#idCidade').val();
	var idEstado  	 = $('#idEstado').val();
	var idPais    	 = $('#idPais').val();
	// . significa class
	// # significa id
	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nomeCliente:nomeCliente, idadeCliente:idadeCliente, idSexo:idSexo, idCidade:idCidade, idEstado:idEstado, idPais:idPais},
		
		success:function(data){
			
			console.log(data);
		alert('Cadastrado');
		telaPrincipal();
		
		}		
	})	
}

function atualizar(){	
	
	var nomeCliente  = $('#nomeCliente').val();
	var idadeCliente = $('#idadeCliente').val();
	var idSexo    	 = $('#idSexo').val();
	var idCidade  	 = $('#idCidade').val();
	var idEstado  	 = $('#idEstado').val();
	var idPais    	 = $('#idPais').val();
	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"update",nomeCliente:nomeCliente, idadeCliente:idadeCliente, idSexo:idSexo, idCidade:idCidade, idEstado:idEstado, idPais:idPais},
		
		success:function(data){
			alert('Cliente Atualizado');
			telaPrincipal();
		}
	})		
}

function deletar(valor){
	
	//console.log(valor);
	var result = confirm("Voce tem certeza?");
	if(result == true){	   
		$.ajax({
			
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar",id:valor},
		
		success:function(data){
			alert('Cliente Deletado do id:'+valor);
			telaListar();
		}
		
	});
	}else{
		alert('Nao apagou!');
	}
	
}