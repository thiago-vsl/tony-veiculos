function corrige(nom_codigo,tel_codigo){
	
	if(confirm("deseja realmente alterar essas informa\u00e7\u00f5es?")){
		
		var dados = {
			processo: "corrige",
			nome: $("#tvt_nome"+tel_codigo).val(),
			telefone: $("#tvt_telefone"+tel_codigo).val(),
			nom_codigo: nom_codigo,
			tel_codigo: tel_codigo
		}

		
		$.ajax({
			type: "POST",
			url: "php/telefones.php",
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

function deleta(nom_codigo,tel_codigo){
	
	if(confirm("deseja realmente apagar essas informa\u00e7\u00f5es?")){
		
		var dados = {
			processo: "deleta",
			nom_codigo: nom_codigo,
			tel_codigo: tel_codigo
		}

		
		$.ajax({
			type: "POST",
			url: "php/telefones.php",
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