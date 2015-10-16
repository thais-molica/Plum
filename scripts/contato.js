$(document).ready(function(){
	/*validação de email*/
	$("#form").submit(function(){
		if($("input#nome").val() == ""){

			$("input#nome").addClass('alert');
			$("input#nome").focus();
			$('#alert_box').addClass('display');
			$('#alert_box').html('Por favor insira seu nome');


		}else{
		if (!validateEmail($("input#email").val())) {
			$("input#email").addClass('alert');
			$('#alert_box').addClass('display');
			$('#alert_box').html('Insira um e-mail v&aacute;lido');

		}else if($("textarea#mensagem").val() == ""){

			$("textarea#mensagem").addClass('alert');
			$("textarea#mensagem").focus();
			$('#alert_box').addClass('display');
			$('#alert_box').html('Escreva uma mensagem');

			}else{
				$('#shadow').fadeIn(function(){
					 //Executa a funciotion a abaixo validar Email registro
					 enviarRegistro();
				});
			} 

		}  

		function validateEmail(email){
			var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
			return regex.test(email);
		}

	});


	//remove o destaque de alerta as inputs
	$('.campo_form').click(function(){
		$(this).removeClass('alert');
		$('#alert_box').removeClass('display');
	});

	//envio
	function enviarRegistro(){                          
		$.post("enviar.php",{
			nome:$("input#nome").val(),
			empresa:$("input#empresa").val(),
			email:$("input#email").val(),
			telefone:$("input#telefone").val(),
			celular:$("input#celular").val(),
			mensagem:$("textarea#mensagem").val()
		},
			   
		function(respondeEdition){
			if(respondeEdition == 500){
				$('.campo_form').val('');
				$('textarea').val('');
				$('#shadow p').fadeOut(function(){
					$('#send').fadeIn();
					$('#send').fadeIn();
					$('#shadow').click(function(){
							$('#send').fadeOut(function(){
								$('#shadow').fadeOut();
					  		});
					  	});
					 });	  
				}else if (respondeEdition == 400){
					$('#shadow p').fadeOut(function(){
						$('#notsend').fadeIn();
						$('#shadow').click(function(){
					 		$('#notsend').fadeOut(function(){
					  			$('#shadow').fadeOut();
					  		});
					 });
				});
			}	
		});
	}

	// o botao com o id enviar enviar o formulario
	$('#enviar').click(function(){
		$('#form').submit();
	});

});

