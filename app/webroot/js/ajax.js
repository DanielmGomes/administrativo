function carregaConteudo(obj){

$.ajax({
  method: "GET",
  url: "../webroot/cidades.php",
  data: {uf: obj.value}
 }).done(function(conteudo){ 	
    $("#cidade").html(conteudo);
 }).fail(function(jqXHR, textStatus, msg){
    alert(msg);
 }); 

}
