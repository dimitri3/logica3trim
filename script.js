// PRIMEIRAMENTE, DESCULPE POR ESSE TRABALHO RUIM QUERIA TER FEITO MAIS MAS ESTOU CANSADO DE MEXER NELE]
$(document).ready(function(){
//alert
	$("#logo").click(function(){
		alert("Bem Vindo a sua Agenda de Tarefas 2017");
	})

//modal

	$('.clicavel').click(function(){
		var id;
		id=$(this).attr('id');
		$("."+id).removeClass("escondido");
	})

	$('.fechar').click(function(){
		$('.modal').addClass ('escondido');
	})

//drop login

	$(".drop").click(function(){
			var id;
			id = $(this).attr('id');
			$("."+id).slideToggle("slow");
		})

//submenus

	$(".item.menu").click(function(){
				var id;
				id = $(this).attr('id');
				$("."+id).slideToggle("slow");

			})
//REDES
	//$("#redes").click(function () {
	//	$(".redes").slideToggle("slow");
	//})

//pagina de perfil do usuario (so desce o perfil[coisa inutil])
	$("#perfil").click(function () {
		$(".perfil").fadeToggle("slow","swing");
	})

})
