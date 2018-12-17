<!doctype html>
<style>
@font-face {
    font-family: 'EncodeSans';
    src: url(EncodeSans.ttf); 
}
@font-face {
    font-family: 'Euro_Styles';
    src: url(EuroStyle.ttf); 
}
.card-header {
	background-color: #FFF !important;
	border-bottom: 2px solid #D8D8D8 !important;
	padding: 1px !important;
	max-width: 100% !important;
}
.card-footer {
	background-color: #2B2B2B !important;
	padding: 1px !important;
	max-width: 100% !important;
	margin-top: 30px;
	padding-bottom: 10px !important;
}
.container {
    max-width: 100% !important;
	padding: 0px !important;
}
body{
	font-family: EncodeSans !important;
	color: #000 !important;
	line-height: normal !important;
}
.card-background {
	background: url(img/negativado_background.png);
}
.img-geral{
	width: 100%;
}
.input-dados{
	border-width: 0px 0px 1px 0px;
    background-color: transparent;
	border-color: #818181;
	width: 80%;
	padding: 5px;
	margin-top: 15px;
	text-align:center;
    font-weight: bold;
}

.card-ladoalado5{
	display: inline-block;
	vertical-align: middle;
	width: 50%;
}
.card-ladoalado6{
	display: inline-block;
	vertical-align: middle;
	width: 45%;
}

.botao-padrao:hover{
	background-color: #1a2451 !important;
}
.botao-padrao2:hover{
	background-color: #1a2451 !important;
}

@media (min-width: 1101px){
	.card-ladoalado1{
		display: inline-block;
		vertical-align: middle;
		width: 30%;
	}
	.card-ladoalado2{
		display: inline-block;
		vertical-align: middle;
		width: 65%;
	}
	.card-ladoalado3{
		display: inline-block;
		vertical-align: middle;
		width: 30%;
		padding: 20px;
	}
	.card-ladoalado4{
		display: inline-block;
		vertical-align: middle;
		width: 65%;
		padding: 20px;
	}
	
}

	
@media (min-width: 901px){
	.card-container {
		padding: 50px 21% 0px 21% !important;
		opacity: 1;	
	}
	.card-texto40 {
		font-size: 40px !important;
	}
	.card-texto40_2 {
		font-size: 40px !important;
	}
	.card-padding20 {
		padding: 0px 15% !important;
	}
	.card-texto20 {
		font-size: 20px;
	}
	.card-texto30 {
		font-size: 30px !important;
	}
	.card-texto70 {
		font-size: 70px !important;
	}
	.card-ladoalado1{
		vertical-align: middle;
	}
	.card-ladoalado2{
		vertical-align: middle;
	}
	.card-marcacao{
		margin: 25px 0px 25px 0px;
		font-size: 18px;
	}
	.card-ladoalado1{
		display: inline-block;
		vertical-align: middle;
		width: 35%;
	}
	.card-ladoalado2{
		display: inline-block;
		vertical-align: middle;
		width: 60%;
	}
	.card-ladoalado3{
		display: inline-block;
		vertical-align: middle;
		width: 30%;
		padding: 15px;
	}
	.card-ladoalado4{
		display: inline-block;
		vertical-align: middle;
		width: 65%;
		padding: 15px;
	}
	.img-carro{
		width: 100%;
	}
	.botao-padrao{
		background-color: #28377A !important;
		border-radius: 7.71275px !important;
		border: none !important;
		margin: 45px;
		width: 40%;
		font-weight: bold !important;
		font-size: 21.5px !important;
	}
	.botao-padrao2{
		background-color: #28377A !important;
		border-radius: 0px 0px 7px 7px !important;
		border: none !important;
		width: 30%;
		font-weight: bold !important;
		font-size: 15px !important;
	}
	
	.mobile-dontshow{
		display:block;
	}
	.mobile-show{
		display:none;
	}
	
}

@media (max-width: 1150px){
	.img-selos2{
		width: 150px;
	}
	.img-selos3{
		width: 130px;
	}
	.img-selos4{
		width: 150px;
	}
}

@media (max-width: 900px){
	.card-container {
		padding: 50px 10% 0px 10% !important;
		opacity: 1;	
	}
	.card-texto40 {
		font-size: 40px !important;
	}
	.card-texto40_2 {
		font-size: 40px !important;
	}
	.card-padding20 {
		padding: 0px 15% !important;
	}
	.card-texto20 {
		font-size: 19px;
	}
	.card-texto30 {
		font-size: 25px !important;
	}
	.card-texto70 {
		font-size: 55px !important;
	}
	.card-ladoalado1{
		vertical-align: middle;
	}
	.card-ladoalado2{
		vertical-align: middle;
	}
	.card-marcacao{
		margin: 25px 0px 25px 0px;
		font-size: 16px;
	}
	.card-ladoalado3{
		display: inline-block;
		vertical-align: middle;
		max-width: 40%;
		padding: 10px;
	}
	.card-ladoalado4{
		display: inline-block;
		vertical-align: middle;
		max-width: 55%;
		padding: 10px;
	}
	.img-carro{
		width: 100%;
	}
	.botao-padrao{
		background-color: #28377A !important;
		border-radius: 7.71275px !important;
		border: none !important;
		margin: 45px;
		width: 50%;
		font-weight: bold !important;
		font-size: 21.5px !important;
	}
	.botao-padrao2{
		background-color: #28377A !important;
		border-radius: 0px 0px 7px 7px !important;
		border: none !important;
		width: 30%;
		font-weight: bold !important;
		font-size: 13px !important;
	}
	.mobile-dontshow{
		display:none;
	}
	.mobile-show{
		display:block;
	}
}

@media (max-width: 550px){
	.card-container {
		padding: 50px 10% 0px 10% !important;
		opacity: 1;	
	}
	.card-texto40 {
		font-size: 27px !important;
	}
	.card-texto40_2 {
		font-size: 32px !important;
	}
	.card-padding20 {
		padding: 0px 0% !important;
	}
	.card-texto20 {
		font-size: 19px;
	}
	.card-texto30 {
		font-size: 20px !important;
	}
	.card-texto70 {
		font-size: 46px !important;
	}
	.card-ladoalado1{
		vertical-align: middle;
	}
	.card-ladoalado2{
		vertical-align: middle;
	}
	.card-marcacao{
		margin: 25px 0px 25px 0px;
		font-size: 14px;
	}
	.card-ladoalado3{
		display: inline-block;
		vertical-align: middle;
		max-width: 40%;
		padding: 10px;
		text-align: justify;
	}
	.card-ladoalado4{
		display: inline-block;
		vertical-align: middle;
		max-width: 55%;
		padding: 10px;
		text-align: justify;
	}
	footer-aux{
		display-none
	}
	.img-carro{
		width: 100%;
	}
	.botao-padrao{
		background-color: #28377A !important;
		border-radius: 7.71275px !important;
		border: none !important;
		margin: 45px;
		width: 60%;
		font-weight: bold !important;
		font-size: 21.5px !important;
	}
	.botao-padrao2{
		background-color: #28377A !important;
		border-radius: 0px 0px 7px 7px !important;
		border: none !important;
		width: 50%;
		font-weight: bold !important;
		font-size: 15px !important;
	}
	.mobile-dontshow{
		display:none;
	}
	.mobile-show{
		display:block;
	}
	.img-selos{
		width: 110px;
	}
	
	.img-selos2{
		width: 130px;
	}
	.img-selos3{
		width: 100px;
	}
	.img-selos4{
		width: 130px;
	}
}

</style>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Fomulario de cadastro</title>
  </head>
  <body>
	<div class="card-header text-center">
		<img src="img/logo.png" class="img-responsive" style="max-width: 100%;height: 60px;" >
	</div>
    <div class="container">
		<div class="card-background text-center">
			<div class="card-container">
				<div class="card-texto40">
					<b>Ficou muito mais simples ter um carro!</b>
				</div>
				<div class="card-texto20 card-padding20">
					S&oacute; aqui na Tony mesmo voc&ecirc; que est&aacute; com o <b>Nome Sujo</b> pode ter
					seu carro novo e sem burocracia.<br>
					A Tony acredita em Voc&ecirc;!
				</div>
			</div>
			<div class="card-container" style="text-align: left;margin-top:40px">
				<div class="card-texto30">
					<b>Renegade 2017 - 1.8 Autom.</b>
				</div>
				<div class="card-texto20">
					De
				</div>
				<div class="card-texto40">
					<b>R$ 80.000,00</b>
				</div>
				<div class="card-texto20">
					Por
				</div>
				<div class="card-texto70">
					<b>R$ 69.900,00</b>
				</div>
			</div>
			<div class="card-container mobile-dontshow" style="text-align: left; padding-top: 0px !important;">
				<div class="card-ladoalado1">
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> 1 Ano de Garantia
					</div>
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> Completo
					</div>
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> C&acirc;mbio Autom&aacute;tico
					</div>
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> Roda de Liga Leve
					</div>	
				</div>
				<div class="card-ladoalado2">
					<img src="img/carro.png" class="img-responsive img-geral" height="auto">
				</div>	
			</div>
			<div class="card-container mobile-show" style="text-align: left; padding-top: 0px !important;">
				<div class="card-ladoalado2">
					<img src="img/carro.png" class="img-responsive img-geral" height="auto">
				</div>
				<div class="card-ladoalado1">
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> 1 Ano de Garantia
					</div>
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> Completo
					</div>
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> C&acirc;mbio Autom&aacute;tico
					</div>
					<div class="card-marcacao">
						<img src="img/marcacao.png" class="img-responsive" style="max-width: 100%;"> Roda de Liga Leve
					</div>	
				</div>				
			</div>
			<div class="card-container text-center">
				<div class="card-texto40_2">
					<font style="color:#28377A"><b>SAIBA MAIS</b></font>
				</div>
				<div style="font-size:16px">
					<b>Para mais informa&ccedil;&otilde;es preencha seus dados e entraremos em contato</b>
				</div>
				<div>
					<input type="text" class="input-dados" placeholder="Nome">
					<input type="text" class="input-dados" placeholder="Telefone">
					<button type="button" class="btn btn-primary botao-padrao2">Incluir mais Telefones</button>
				</div>
				<div>
					<button type="button" class="btn btn-primary botao-padrao">ENVIAR</button>
				</div>
			</div>
			<div class="card-container text-center">
				<div class="card-texto40_2">
					<b>Como Funciona ?</b>
				</div>
				<div style="font-size:19px">
					Entenda as condi&ccedil;&otilde;es que criamos para voc&ecirc; sair de carro novo
				</div>
			</div>
			<div class="card-container text-center mobile-dontshow">
				<div class="card-ladoalado3">
						<img src="img/cel.png" class="img-responsive img-geral" height="auto">
				</div>
				<div class="card-ladoalado4" style="text-align: justify;">
					<div style="font-size:19px; padding: 10px">
						<b>A Tony vende para mim que estou com o nome sujo?</b><br>
						<br>
						Sim, a Tony Ve&iacute;culos acredita que mesmo voc&ecirc; que est&aacute; negativado tem o direito de ter um carro novo.
					</div>
					<div style="font-size:19px;padding: 10px">
						<b>Posso parcelar a entrada?</b><br> 
						<br>
						Infelizmente para essas condi&ccedil;&otilde;es n&atilde;o podemos parcelar a entrada, porem a Tony tem um produto chamado <b>Compra Programada</b> que ajuda voc&ecirc; que quer comprar um carro mas est&aacute; com o nome sujo e n&atilde;o tem entrada. para saber mais clique aqui.
					</div>
					<div style="font-size:19px;padding: 10px">
						<b>N&atilde;o tenho CNH, posso comprar mesmo assim?</b><br> 
						<br>
						Infelizmente &eacute; necess&aacute;rio ter a CNH para vendermos nessas condi&ccedil;&otilde;es.
					</div>
				</div>
			</div>
			<div class="card-container text-center mobile-show">
				<div class="card-ladoalado3">
						<img src="img/cel.png" class="img-responsive img-geral" height="auto">
				</div>
				<div class="card-ladoalado4" style="text-align: justify;">
					<div style="font-size:19px; padding: 10px">
						<b>A Tony vende para mim que estou com o nome sujo?</b><br>
						<br>
						Sim, a Tony Ve&iacute;culos acredita que mesmo voc&ecirc; que est&aacute; negativado tem o direito de ter um carro novo.
					</div>
				</div>
				<div style="font-size:19px;padding: 10px;text-align: justify;">
					<b>Posso parcelar a entrada?</b><br> 
					<br>
					Infelizmente para essas condi&ccedil;&otilde;es n&atilde;o podemos parcelar a entrada, porem a Tony tem um produto chamado <b>Compra Programada</b> que ajuda voc&ecirc; que quer comprar um carro mas est&aacute; com o nome sujo e n&atilde;o tem entrada. para saber mais clique aqui.
				</div>
				<div style="font-size:19px;padding: 10px;text-align: justify;">
					<b>N&atilde;o tenho CNH, posso comprar mesmo assim?</b><br> 
					<br>
					Infelizmente &eacute; necess&aacute;rio ter a CNH para vendermos nessas condi&ccedil;&otilde;es.
				</div>
				
			</div>
			<div class="card-container text-center">
				<div class="card-texto40_2">
					<b>Outras D&uacute;vidas</b>
				</div>
				<div style="font-size:19px">
					Entenda as condi&ccedil;&otilde;es que criamos para voc&ecirc; sair de carro novo
				</div>
			</div>
			<div class="card-container text-center mobile-dontshow">
				<div class="card-ladoalado5" style="text-align: justify;">
					<div style="font-size:19px; padding: 10px">
						<b>Como posso dar a entrada? </b><br>
						<br>
						Para essas condi&ccedil;&otilde;es a entrada precisa ser feita em dinheiro.
					</div>
					<div style="font-size:19px;padding: 10px">
						<b>Posso dar um carro como entrada? </b><br> 
						<br>
						Sim, aceitamos o seu usado como entrada.
					</div>
					<div style="font-size:19px;padding: 10px">
						<b>O que a garantia de 1 ano cobre?</b><br> 
						<br>
						A garantia cobre: motor, c&acirc;mbio e partes internas.
					</div>
				</div>
				<div class="card-ladoalado6">
					<img src="img/cel2.png" class="img-responsive" style="width: 250px" height="auto">
				</div>
			</div>
			<div class="card-container text-center mobile-show">
				<div class="card-ladoalado5" style="text-align: left;">
					<div style="font-size:19px; padding: 10px">
						<b>Como posso dar a entrada? </b><br>
						<br>
						Para essas condi&ccedil;&otilde;es a entrada precisa ser feita em dinheiro.
					</div>
				</div>
				<div class="card-ladoalado6">
					<img src="img/cel2.png" class="img-responsive img-geral" height="auto">
				</div>
				<div style="font-size:19px;padding: 10px;text-align: left;" >
					<b>Posso dar um carro como entrada? </b><br> 
					<br>
					Sim, aceitamos o seu usado como entrada.
				</div>
				<div style="font-size:19px;padding: 10px;text-align: left;">
					<b>O que a garantia de 1 ano cobre?</b><br> 
					<br>
					A garantia cobre: motor, c&acirc;mbio e partes internas.
				</div>
			</div>
			
			<div class="card-container text-center" style="background-color:#ECECEC;">
				<div class="card-texto40_2">
					<b>Voc&ecirc; est&aacute; esperando o que para come&ccedil;ar?</b>
				</div>
				<div class="card-texto20">
					Prencha seus dados agora e entraremos em contato
				</div>
				<div>
					<button type="button" class="btn btn-primary botao-padrao">SAIBA MAIS</button>
				</div>
			</div>
			<div class="card-container text-center">
				<img src="img/garantia.png" class="img-responsive img-selos" style="margin-right: 25px" height="auto">
				<img src="img/negativado.png" class="img-responsive img-selos" style="margin-left: 25px" height="auto">
			</div>
			<div class="card-container text-center mobile-dontshow" >
				<img src="img/3maior.png" class="img-responsive img-selos3" style="margin-right: 20px;" height="auto">
				<img src="img/40anos.png" class="img-responsive img-selos2" style="margin-left: 15px;margin-right: 15px" height="auto">
				<img src="img/800.png" class="img-responsive img-selos4" style="margin-left: 20px;" height="auto">
			</div>
			<div class="card-container text-center mobile-show">
				<img src="img/40anos.png" class="img-responsive img-selos2" style="margin-bottom: 15px"height="auto"><br>
				<img src="img/3maior.png" class="img-responsive img-selos3" style="margin-right: 15px" height="auto">
				<img src="img/800.png" class="img-responsive img-selos4" style="margin-left: 15px" height="auto">
			</div>
		</div>
    </div>
	<div class="card-footer mobile-dontshow">
		<div class="card-ladoalado5 text-center" style="text-align: center">
			<div style="text-align: right;width:50%;display: inline-block;">
				<img src="img/logo.png" class="img-responsive" style="max-width: 100%;height: 60px;" align="middle" >
			</div>
			<div style="text-align: left;width:45%;display: inline-block; vertical-align: middle;color:#FFF;font-size:15px">
				<i><b>Todos os direitos reservados<br>&copy;Tony veiculos</b></i>
			</div>	
		</div>
		<div class="card-ladoalado6 text-center" style="text-align: center">
			<img src="img/face.png" class="img-responsive" style="margin-right: 5px" height="auto">
			<img src="img/insta.png" class="img-responsive" style="margin-left: 5px;margin-right: 5px" height="auto">
			<img src="img/yb.png" class="img-responsive" style="margin-left: 5px" height="auto">	
		</div>
	</div>
	<div class="card-footer mobile-show">
		<div class="card-ladoalado5 text-center" style="width:100%;">
			<div>
				<img src="img/logo.png" class="img-responsive" style="max-width: 100%;height: 60px;" align="middle" >
			</div>
			<div style="color:#FFF;font-size:15px">
				<i><b>Todos os direitos reservados &copy;Tony veiculos</b></i>
			</div>	
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>