<?php
require "conexao.php";

$processo = @$_POST['processo'];


switch($processo){
	
	case "corrige":
		$nom_codigo = @$_POST['nom_codigo'];
		$tel_codigo = @$_POST['tel_codigo'];
		$nome = @$_POST['nome'];
		$telefone = @$_POST['telefone'];
		
		
		
		$SQL_update = "UPDATE nomes INNER JOIN telefones ON (nomes.NOM_CODIGO = telefones.NOM_CODIGO)
						SET nomes.NOM_NOME = '".$nome."', telefones.TEL_NUMERO = '".$telefone."'
						WHERE TEL_CODIGO = ".$tel_codigo;
						
		$SQL_query  = mysqli_query($conexao,$SQL_update) or die(json_encode(array("resp" => "Falha ao salvar os dados: ".mysqli_error($conexao))));

		$resp["resp"] = "Os dados foram salvos com sucesso";
		print json_encode($resp);
	break;
	
	case "deleta":
		$nom_codigo = @$_POST['nom_codigo'];
		$tel_codigo = @$_POST['tel_codigo'];
		
		$SQL_delete = "DELETE FROM telefones WHERE TEL_CODIGO = '".$tel_codigo."'";
		$SQL_query  = mysqli_query($conexao,$SQL_delete) or die(json_encode(array("resp" => "Falha ao apagar os dados: ".mysqli_error($conexao))));
		
		$SQL_select = "SELECT NOM_CODIGO FROM telefones WHERE NOM_CODIGO = '".$nom_codigo."'";
		$SQL_query  = mysqli_query($conexao,$SQL_select) or die(json_encode(array("resp" => "Falha ao apagar os dados: ".mysqli_error($conexao))));
		
		if(mysqli_num_rows($SQL_query) == 0){
			$SQL_delete = "DELETE FROM nomes WHERE NOM_CODIGO = '".$nom_codigo."'";
			$SQL_query  = mysqli_query($conexao,$SQL_delete) or die(json_encode(array("resp" => "Falha ao apagar os dados: ".mysqli_error($conexao))));
		}
		
		$resp["resp"] = "Os dados foram apagados com sucesso";
		print json_encode($resp);
	break;
}

function getCodigo($tabela,$trig,$conexao){
	
	$select = "SELECT ".$trig."_CODIGO FROM ".$tabela." ORDER BY ".$trig."_CODIGO DESC LIMIT 1";
	$query = mysqli_query($conexao,$select);
	$cod = mysqli_fetch_array($query);
	
	return $cod[$trig."_CODIGO"];
}

?>