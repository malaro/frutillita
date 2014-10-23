<?
	if ($_GET["l"]) {
		setcookie("idioma", $_GET["l"], time()+60*60*24*360);
		exit('<meta http-equiv="refresh" content="0; url=./" />');
	}
	if (!$_COOKIE["bg"]) {
		setcookie("bg", rand(1,5), time()+60);
		exit('<meta http-equiv="refresh" content="0; url=./" />');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>zinc.com.ar</title>
<meta charset="utf-8" />	
<!-- Attach our CSS -->
<link rel="stylesheet" href="js/orbit-1.2.3.css">
<link href="css/style-2.css" rel="stylesheet" type="text/css" />

<style>
	#imagen {
	 	background: url('galeria/caratulas/car_00<? echo $_COOKIE["bg"]; ?>.jpg');
	}
</style>

<!-- Attach necessary JS -->
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>
</head>
<body>
<!-- esto es una nota clase 2 abro un div para cada submenu y al final lo cierro -->
<div id="print">
<div id="packaging">
<div id="editorial">
<div id="digital">
<div id="ilustracion">
<div id="encuadernacion">
<div id="reciclaje">
<div id="prensa">
<div id="info">
	<div id="contenedor"> 
			<div id="colder"> 
			<div id="paginador"></div>
			
    		<div id="imagen"> 
                     	 
            	 <div id="textoprensa">
              		<?php 
                   		$idioma="";
						if ($_COOKIE["idioma"] == "en") $idioma="_in-";
						include $idioma."prensa.html";
					?>
               
                 </div>
                 <div id="textoinfo">
                   	<?php
						include $idioma."info.html";
					?>
    			</div>
       	</div>
       	
	<?php 
		if ($_COOKIE["idioma"] == "en") $idioma="_in-";
		if ($_GET["a"]) {
				// el remplace esta para dar más "seguridad"
				include $idioma.str_replace("/", "", $_GET["a"]);
	?>
	
	<style>
		#imagen {
		 	background: none;
		}
		#cuadricule {
			display: none;	
		}
	</style>
	
	<?php } ?>
	
	<? if (!$_COOKIE["idioma"]) { ?>
		<span id="version3">Versión 3</span>
  	<? } ?>

  </div> 
 <div id="colizq">
<div id="logo" onClick="location.href='./#';"></div>
<?php if (!$_COOKIE["idioma"]) {  ?>
	<div id="idioma">
		<div id="menu">
			<a href="?l=en">ENGLISH</a>
			<a href="?l=es">ESPAÑOL</a>
		</div>
	</div>
<? } else { ?>
<div id="menu"><a href="?a=print_trasbordos.html#print">PRINT</a>
  <div class="submenu" id="menuprint">
    <a href="?a=print_trasbordos.html#print" >Trasbordos</a>
    <a href="?a=print_jenseits.html#print" >Jenseits</a>
    <a href="?a=print_hannover.html#print" >Hannover</a>
    <a href="?a=print_objetos.html#print" >Objetos</a>
    <a href="?a=print_dotzero.html#print" >Dotzero</a>
    <a href="?a=print_himmel.html#print" >Himmel</a>
    <a href="?a=print_articultores.html#print" >Articultores</a>
    <a href="?a=print_franziskus.html#print" >M+F galeria</a>
    <a href="?a=print_jumbo.html#print" >Jumbo</a>
    <a href="?a=print_noraluca.html#print" >Noraluca</a>
    <a href="?a=print_amor.html#print" >Amor y Humor</a>
    <a href="?a=print_demo.html#print" >Demos 1</a>
   	<a href="?a=print_demo2.html#print" >Demos 2</a>
    <a href="?a=print_capataza.html#print" >Capataza</a>
    <a href="?a=print_qom.html#print" >Qom</a>
    <a href="?a=print_sony.html#print" >Sony</a>
    <a href="?a=print_identidad.html#print" >Logos</a>
    </div>
  <a href="?a=packaging_amaryllis.html#packaging">PACKAGING</a>
  <div class="submenu" id="menupackaging">
  	<a href="?a=packaging_amaryllis.html#packaging" >Amaryllis</a>
    <a href="?a=packaging_herbs.html#packaging" >Herbspack</a>
    <a href="?a=packaging_nimitz.html#packaging" >Nimitz</a>
    <a href="?a=packaging_axe.html#packaging" >Miniaxe</a>
    <a href="?a=packaging_sinectis.html#packaging" >Sinectis</a>
   </div>
  <a href="?a=editorial_british.html#editorial">EDITORIAL </a>
  <div class="submenu" id="menueditorial">
    <a href="?a=editorial_british.html#editorial" >British council</a>
    <a href="?a=editorial_luzverde.html#editorial" >Luz verde</a>
    <a href="?a=editorial_own.html#editorial" >Own</a>
   </div>
  <a href="?a=web_resma.html#digital">DIGITAL
  </a>
  <div class="submenu" id="menudigital">
  	<a href="?a=web_resma.html#digital" >Resma</a>
    <a href="?a=web_advent.html#digital" >Buy advent</a>
    <a href="?a=web_advisor.html#digital" >Course advisor</a>
    <a href="?a=web_marcha.html#digital" >Marcha Latina</a>
    <a href="?a=web_pachanga.html#digital" >Pachanga</a>
    <a href="?a=web_timba.html#digital" >Timba</a>
    </div>
  <a href="?a=ilustracion_code.html#ilustracion">ILUSTRACIÓN
  </a>
  <div class="submenu" id="menuilustracion">
    <a href="?a=ilustracion_code.html#ilustracion" >Code</a>
    <a href="?a=ilustracion_ciempies.html#ilustracion" >Ciempies</a>
    <a href="?a=ilustracion_ponji.html#ilustracion" >Ponjiset</a>
    <a href="?a=ilustracion_china.html#ilustracion" >China</a>
    <a href="?a=ilustracion_esnosuma.html#ilustracion" >Esnosuma</a>
    <a href="?a=ilustracion_bunny.html#ilustracion" >Bunny</a>
    <a href="?a=ilustracion_record.html#ilustracion" >Record</a>
    <a href="?a=ilustracion_survive.html#ilustracion" >Survive</a>
    <a href="?a=ilustracion_totalgreen.html#ilustracion" >Totalgreen</a>
    <a href="?a=ilustracion_human.html#ilustracion" >Human</a>
    <a href="?a=ilustracion_autumn.html#ilustracion" >Autumn</a>
    <a href="?a=ilustracion_oso.html#ilustracion" >Oso</a>
    </div>
  <a href="?a=encuadernacion_casa.html#encuadernacion">ENCUADERNACION
  </a>
  <div class="submenu" id="menuencuadernacion">
  	<a href="?a=encuadernacion_casa.html#encuadernacion" >Casa</a>
    <a href="?a=encuadernacion_shiatsu.html#encuadernacion" >Shiatsu</a>
    <a href="?a=encuadernacion_tao.html#encuadernacion" >Tao</a>
   </div>
  <a href="?a=reciclaje_aluminio.html#reciclaje">RECICLAJE</a>
  <div class="submenu" id="menureciclaje">
    <a href="?a=reciclaje_aluminio.html#reciclaje" >Aluminio</a>
    <a href="?a=reciclaje_papel.html#reciclaje" >Papel</a>
    </div>
  <a href="?#prensa">PRENSA
  </a>
  <div class="submenu" id="menuprensa">
  	<a href="?a=prensa_fisura.html#prensa" >La Fisura</a>
    <a href="?a=prensa_logos4.html#prensa" >Los Logos 4</a>
    <a href="?a=prensa_domagazine.html#prensa" >Do Magazine</a>
    <a href="?a=prensa_treslogos.html#prensa" >Tres Logos</a>
    <a href="?a=prensa_hello.html#prensa" >Business Cards 2</a>
    <a href="?a=prensa_mandala.html#prensa" >Bunny Mandala</a>
    <a href="?a=prensa_flavorpill.html#prensa" >Flavorpill</a>
	<a href="?a=prensa_iconography.html#prensa" >Iconography 2</a>
    <a href="?a=prensa_sacado.html#prensa" >BA Sacado</a>
    <a href="?a=prensa_loslogos.html#prensa" >Los Logos</a>
    <a href="?a=prensa_pictoplasma.html#prensa" >Pictoplasma</a>
    <a href="?a=prensa_experimenta.html#prensa" >Experimenta</a>
    <a href="?a=prensa_fontana.html#prensa" >Fontana</a>
    </div>
  <a href="?#info">INFO</a>
  <? } ?>
  </div>
		</div> </div> </div> </div> </div> </div> </div> </div> </div>
	</div>
</div>
 <script type="text/javascript">
			var numero = 1;
			var pagina = 0;
			$( "img" ).each(function() { pagina ++; });
			if (pagina > 0) $("#paginador").html(numero + "/ " + pagina);
			$(window).load(function() {
				$('#featured').orbit({
				  animation: 'fade',animationSpeed: 400, timer: true, advanceSpeed: 10000,
				  afterSlideChange: function () {
				  		numero ++;
				  		if (numero > pagina) numero = 1;
				  		$("#paginador").html(numero + "/ " + pagina);
				  }		 
				});
			});
</script>

</body>
</html>