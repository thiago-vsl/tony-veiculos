<!doctype html>
<?php require "php/conexao.php"; ?>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css" href="css/telefones.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tony Ve&iacute;culos (Telefones)</title>
  </head>
  <body>
	<div class="card-header text-center">
		<img src="img/logo.png" class="img-responsive" style="max-width: 100%;height: 60px;" >
	</div>
	<div class="container">
		<div class="card-background">
			<div class="text-center" style="font-size:20px;margin: 50px 0px;">
				<b>Dados de telefones cadastrados pelos usu&aacute;rios:</b>
			</div>
			<div class="text-center" style="margin: 50px">
				<?php
				
					$SQL_dados = "SELECT NOM_NOME,TEL_NUMERO,TEL_CODIGO,nomes.NOM_CODIGO FROM nomes INNER JOIN telefones on (nomes.NOM_CODIGO = telefones.NOM_CODIGO)";
					$SQL_query  = mysqli_query($conexao,$SQL_dados) or die("Falha ao carregar as informações");
					
					print "<table class='table' >";
					print "<thead>
							<tr>
								<th scope=\"col\" class='titulo'>NOME</td>
								<th scope=\"col\" class='titulo'>TELEFONE</td>
								<th scope=\"col\" class='titulo'>EDI&Ccedil;&Atilde;O</td>
							</tr>
						   </thead>
						   <tbody>";
					$script = "";
					while($dados = mysqli_fetch_array($SQL_query)){
						print "<tr class='dados_tabela'>
								<td style='border-right: solid 1px'><input id='tvt_nome".$dados['TEL_CODIGO']."' name='tvt_nome".$dados['TEL_CODIGO']."' value='".$dados['NOM_NOME']."' class='input-dados'> </td>
								<td style='border-right: solid 1px'><input id='tvt_telefone".$dados['TEL_CODIGO']."' name='tvt_telefone".$dados['TEL_CODIGO']."' value='".$dados['TEL_NUMERO']."' class='input-dados'></td>
								<td 									<span id='cad_aux1'>
										<img src='img/correcao.png' width='16px' style='margin-right:5px;cursor:pointer' onclick='corrige(".$dados['NOM_CODIGO'].",".$dados['TEL_CODIGO'].")' >
									</span>
									<span id='cad_aux2'>
										<img src='img/delete.png' width='16px' style='margin-left:5px;cursor:pointer' onclick='deleta(".$dados['NOM_CODIGO'].",".$dados['TEL_CODIGO'].")'>
									</span>
								</td>
							</tr>";
						$script .= "<script>$(\"#tvt_telefone".$dados['TEL_CODIGO']."\").mask(\"(99) 99999-9999\");</script>";
					}
					print "</tbody></table>";
				?>
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
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
	<script type="text/javascript" src="js/telefones.js" ></script>
	<?php print $script; ?>
  </body>
</html>