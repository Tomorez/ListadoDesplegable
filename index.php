<?php
	var_dump($_POST);
	$coleccion = explode(" ","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum posuere dui vel dictum. Donec facilisis auctor sapien a molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat ante, elementum nec interdum sit amet, varius eu velit. Nunc eu eros laoreet, porta turpis at, consectetur justo. Integer blandit iaculis diam, in sollicitudin nulla accumsan sit amet. Praesent non neque porttitor, imperdiet purus at, ultricies erat. Integer arcu massa, luctus aliquam suscipit sit amet, tempor non nisl. Nulla tincidunt purus et metus eleifend ornare. Sed lacinia metus dui, sit amet dapibus nisi ornare at. Quisque dictum dapibus nisl eu vulputate. In pretium magna vel eros gravida cursus. Suspendisse consectetur sapien in tortor elementum, eget lacinia mi consequat.")
	?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Plantilla web básica</title>
	<link rel="stylesheet" type="text/css" href="CSS/bs4/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="CSS/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="CSS/ListadoDesplegable.css">

</head>

<body>


	<div class="container">
		<h1><hr>DESPLEGABLE #LoremIpsum<hr></h1>
<!-- ******************************************************************************************* -->		
		<form method="POST" id="LoremIpsum">
<!-- ******************************************************************************************* -->
			<div class="Formulario">

			</div>	
<!-- ******************************************************************************************* -->
<!-- ******************************************************************************************* -->
			<div class="desplegable ">
				<div class="col-12">
					<h3>Lorem Ipsum seleccionados</h3>
					<span class="Seleccion">
						<span class="aviso">
							Nada seleccionado
					</span>
				</div> <!-- END .desplegable-->
<!-- ******************************************************************************************* -->
				<div class="col-12 p-2 accion caja">
					<i class="fa fa-plus" aria-hidden="true"></i> Mostrar mas 
				</div><!-- END .CAJA-->
<!-- ******************************************************************************************* -->
				<div class="panel" style="display: none;">
<!-- ******************************************************************************************* -->
					<div class="col-12 searcher">
							<input type="text" class="parametro">
							<button type="button" class="buscar">Buscar</button>
					</div><!-- END .SEARCHER-->
<!-- ******************************************************************************************* -->
					<div class="col-12 items">
						<?php
							for($i=0;$i<100;$i++){
								echo "<div class='bloque p-2' index='$i'>".$coleccion[$i]."</div>";
							}
						?>
					</div><!-- END .ITEMS-->
<!-- ******************************************************************************************* -->			
				</div><!-- END .PANEL-->
<!-- ******************************************************************************************* -->

			</div> <!-- END .DESPLEGABLE-->
<!-- ******************************************************************************************* -->

			<input type="submit" value="Enviar">
		</form>
		

	</div>	
</body>
  <script src="JS\jquery-3.2.1.min.js"></script>
  <script src="JS\jquery-ui.js"></script>
  <script src="JS\bs4\tether.min.js"></script>
  <script src="JS\bs4\popper.min.js"></script>
  <script src="JS\bs4\bootstrap.min.js"></script>
  <script src="JS\ListadoDesplegable.js"></script>
  <script>

	var tg = new Desplegable("LoremIpsum");
	tg.inicializar();




  </script>	
</html>
