<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<?php include 'template/assets.php'; ?>
		<script type="text/javascript" src="scripts/contato.js"></script>
		<script type="text/javascript" src="scripts/maskedinput.min.js"></script>
		<script type="text/javascript">
		//mascara de inputs
		jQuery(function($){
		   $(".phone").mask("(99) 9999-9999");
		   $(".celphone").mask("(99) 99999-9999");
		});
		</script>

		<title>Communica Plum</title>
	</head>
	<body>


		<?php include 'template/header.php'; ?>

		<!--  container -->
		<div class="wrapper">
			<!--  textos contato -->
			<div class="wrapper-internal">
				<section class="contact">
					<h3>Com quem eu falo?</h3>
					<span class="text-featured">“A arte de comunicar a verdadeira essência do negócio nos faz ser cada vez mais apaixonados pelo que acreditamos.”</span>
					<p>Graças a enorme <span>vontade</span> que temos de <span>inovar e superar expectativas</span>, o time da Communica Plum se preocupa em <span>entregar resultados mensuráveis</span> de Comunicação Integrada de Marketing e executar ações, ideias e ferramentas de forma prática e eficiente.</p>
				</section>

				<!--  formulario de contato endereço -->
				<section class="contact-form">
					<div class="left">
						<p class="text-margin"><span>CONTATO</span><br>
						+55 (11) 98292 - 0230<br>
						falaqueeuteescuto@communicaplum.com</p>

						<p class="text-margin"><span>SKYPE</span><br>
						Rose.Catani</p>

						<p>Ficou com dúvidas? Quer conversar?<br>
						Entre em contato e seja muito bem vindo!</p>
					</div>

					<div class="right">
						<!-- divs que compoem aas açoes de envio do formulario-->
						<form id="form" action="" method="post" name="form" onsubmit="return false;">
							<input id="nome" type="text" name="nome" placeholder="Nome" class="campo_form">
							<input id="email" type="text" name="email" placeholder="E-mail" class="campo_form">
							<input id="empresa" type="text" name="empresa" placeholder="Empresa" class="campo_form">
							<input id="telefone" type="text" name="telefone" placeholder="Telefone" class="phone campo_form">
							<input id="celular" type="text" name="celeular" placeholder="Celular" class="celphone campo_form">
							<textarea id="mensagem" rows="0" cols="0" name="mensagem" placeholder="Mensagem" class="campo_form"></textarea>
							<input type="button" value="ENVIAR" id="enviar">
						</form>

						<!-- divs que compoem aas açoes de envio do formulario -->
						<div id="shadow">
							<p class="text_line01"><img src="images/carregando.gif" alt="Carregando" title="Carregando"></p>
							<p class="text_line02">Enviando</p>
						</div>

						<div id="send">Mensagem enviada com sucesso!</div>
						<div id="notsend">Falha no envio da mensagem!</div>

						<div id="alert_box"></div>
						<!-- //divs que compoem aas açoes de envio do formulario-->
					</div>
					<div class="clear"></div>
				</section>
			</div>

		</div>
		<!--  //container -->
		<?php include 'template/footer.php'; ?>

	</body>
</html>
