var qtdtelefone = 1;
$("#tnv_telefone1").mask("(99) 99999-9999");

function incluirTelefone(){
	
	var input = document.createElement("INPUT");
	qtdtelefone++;

	input.type = "text";
	input.name = "tnv_telefone" + qtdtelefone;
	input.id = "tnv_telefone" + qtdtelefone;
	input.className = "input-dados";
	input.placeholder = "Telefone";
	
	document.getElementById("card-telefones").appendChild(input);
	$("#tnv_telefone" + qtdtelefone).mask("(99) 99999-9999");
}

function enviar_dados(){
	
	if($("#tnv_nome").val() == ""){
		alert('Preencha o campo nome');
	}
	else{
	
		var telefones = "";
		for(var i = 1; i <= qtdtelefone; i++){
			if(document.getElementById("tnv_telefone"+i).value != ""){
				if(telefones!='') telefones += ';';
				
				telefones += document.getElementById("tnv_telefone"+i).value;
			}
		}
		
		if(telefones == ""){
			alert('Preencha pelo menos um telefone');
		}
		else{
			
			var dados = {
				processo: "salvar",
				nome: $("#tnv_nome").val(),
				telefones: telefones
			}
			
			$.ajax({
				type: "POST",
				url: "php/home.php",
				data: dados,
				dataType: "json",
				success: function(data){
					alert(data.resp);
					window.location.reload();
				},
				error: function(info, status, error){
					alert('Falha ao salvar as informa\u00e7\u00f5es');
					console.log(error);
				}
			});
		}
	}
}