$(document).ready(function () { 
	/*Obtenemos el evento Submit, este ejecuta cuando el usuario hace click al boton comentar#comentario_ajax es el id del formulario de donde tratamos de enviar el comentario, si tu formulario tiene otro id tenes que cambiar este acontinucion*/
	$("#comentarios_ajax").submit(function () {
		var noticia_id = $("#user_id").val();
		var user_id = $("#noticia_id").val();
		var comentario = $("#comentario").val();
		var cadena = 'user_id=' + user_id + '¬icia_id=' + noticia_id + '&comentario=' + encodeURIComponent(comentario);
		$.ajax({
			type: "POST",
			url: "comentar.php",
			data: cadena,
			cache: false,
			success: function (datos) {
				if (datos) {
					$("#listaComentarios").append(datos);
				}
			}
		});
		return false;
	});
});