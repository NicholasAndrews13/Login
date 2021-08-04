// JavaScript Document

function telalogin(){
	window.location.href = 'telalogin.php';
}


function verificar(){

	var email = $('#email').val();
	var senha = $('#senha').val();
	var acao  = $('#acao').val();
	//console.log(email);
	
	$.ajax({
		type:"POST",
		url:"controle/controle_login.php",
		data:{acao:acao, email:email, senha:senha},
		
		success: function(data){
			
			//console.log(data);
			if(data==1){
				window.location.href = 'telaprincipal.php';
			}else{
				window.location.href = 'telalogin.php';

			}
		}
	});
	
}