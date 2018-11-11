
  	class Desplegable {
  		constructor(Id) {
		    this.id = Id;
	  	}
	  	inicializar(){
	  		Desplegable.ocultar(this.id);
			Desplegable.picar(this.id);

	  		var id = this.id;
	  		$("#"+this.id+" > .desplegable > .panel > .searcher > .buscar").click(function(){
		  		var param = $("#"+id+" > .desplegable > .panel > .searcher > .parametro").val();
		  		$( "#"+id+" > .desplegable > .panel > .items > .bloque:contains('"+param+"')" ).show();
		  		$( "#"+id+" > .desplegable > .panel > .items > .bloque:not(:contains('"+param+"'))").hide(); 
		  	})
		  	$("#"+this.id+" > .desplegable > .panel > .searcher > .parametro").keyup(function(){
		  		var param = $(this).val();
		  		$( "#"+id+" > .desplegable > .panel > .items > .bloque:contains('"+param+"')" ).show();
		  		$( "#"+id+" > .desplegable > .panel > .items > .bloque:not(:contains('"+param+"'))").hide(); 
		  	});

	  	}
	  	static expandir(id){
	  		$("#"+id+" .desplegable .accion").click(function(){
		  		$(this).siblings('.panel').slideUp("slow/400/slow");
		  		$(this).html("<i class=\"fa fa-plus\" aria-hidden=\"true\"> Mostrar mas.");
		  		$(this).unbind( "click" );
  				Desplegable.ocultar(id);


  			});
	  	}

	  	static ocultar(id){

		  	$("#"+id+" .desplegable .accion").click(function(){
		  		$(this).unbind( "click" );
		  		$(this).siblings('.panel').slideDown("slow/400/slow");
		  		$(this).html("<i class=\"fa fa-minus\" aria-hidden=\"true\"> Mostrar menos");
		  		Desplegable.expandir(id);
		  	});
	  	}

	  	static picar(id){
	  		var index;
		  	$("#"+id+" > .desplegable > .panel > .items > .bloque").click(function(){

		  		/* ITEM YA SELECCIONADO */
		  		if($("#"+id+" > .desplegable .Seleccion > .bloque[index="+$(this).attr("index")+"]").length == 0){
		  			index = $(this).attr("index");
		  			$("#"+id+" > .desplegable .Seleccion .aviso").hide();
		  			$(this).addClass('Selected');
		  			/* <!-- *********************************************************************** --> */
		  			$("#"+id+" > .Formulario").append("<input class='col-2' type='hidden' name='seleccion[]' index='"+index+"' value='"+index+" -- "+$("#"+id+" > .desplegable > .panel > .items > .bloque[index="+$(this).attr("index")+"]").text()+"'>");

		  			$(this).clone().appendTo("#"+id+" > .desplegable .Seleccion").click(function(){
		  				$("#"+id+" > .Formulario > input[index="+$(this).attr("index")+"]").remove();
		  				$("#"+id+" > .desplegable > .panel > .items > .bloque[index="+$(this).attr("index")+"]").removeClass("Selected");
		  				$(this).remove();

					});
				}
		  	});
	  	}



	}