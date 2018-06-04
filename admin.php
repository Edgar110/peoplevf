<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>People XR | peoplexr.com</title>
    <meta name="language" content="Spanish" />
    <meta name="geo.region" content="MX" />
    <meta name="googlebot" content="noodp" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" href="../favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/contactanos.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<style>
	.contenido button {
		margin: 10px;
	}
	#if{
		border: 4px #fff solid;
	}
	.first-c {
    padding: 5em 18px 0px 5em;
}
.menu{
	display: none;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 3;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#contenImg img{
	 width: 250px;
}
#contenImg{
	text-align: center;
	background-image: url(../img/v5.jpg);
    height: 85em;
    background-size: cover;
    background-position: 35% 58%;
    position: static;
}
#contenImg .boton{
    background: #ff6e0d;
    border: 1px solid #ff6e0d;
    border-radius: 4px;
    width: 13.75em;
    height: 3.4375em;
    font-size: 2em;
    margin-left: 73px;
}

	</style>
</head>
<body onload="">
<div class="col-md-12 first-c" id="step2" style="display:block">
	
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="javascript:void(0)" onclick="motor.sendfile()">SUBIR CAMBIOS</a>
  <a href="javascript:void(0)" onclick="motor.recargar()">VOLVER A INICIAR</a>
  <a href="javascript:void(0)" onclick="motor.imagenes()">CAMBIAR IMAGENES</a>
  
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer;color:#33FFEC" onclick="openNav()">&#9776; open</span>
</div>



		<!-- <a id="programatically" href="#" download="date.html">Download</a>
		<div class="text-justify p-tit">Opciones</div>
		<button class="boton" onclick="motor.sendfile()"><a href="javascript:void(0)">SUBIR CAMBIOS</a></button>
		<button class="boton" onclick="motor.recargar()"><a href="javascript:void(0)">RECARGAR</a></button> -->
</div>
<div id="if"></div>
<div id="contenImg" style="display:none"></div>
<div class="container-fluid menu" >
  <nav class="navbar navbar-default main-menu" role="navigation">
    <!-- El logotipo y el icono que despliega el menú se agrupan
         para mostrarlos mejor en los dispositivos móviles -->
    <div class="navbar-header col-md-12">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <div class="container-fluid logo" >
		<img src="../img/logo-.gif"></img>
	  </div>
    </div>
  
    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
	
  </nav>
</div>
<div class="container-fluid contenido" >
	<div class="col-md-12 first-c " id="step1">
		<!-- <a id="programatically" href="#" download="date.html">Download</a> -->
		<div class="text-justify p-tit">Seleccióna pagina a modificar</div>
		<button class="boton" onclick="motor.readfile('../index.html','0')"><a href="javascript:void(0)">HOME</a></button>
		<button class="boton" onclick="motor.readfile('../servicios.html','1')"><a href="javascript:void(0)">SERVICIOS</a></button>
		<button class="boton" onclick="motor.readfile('../nosotros.html','2')"><a href="javascript:void(0)">NOSOTROS</a></button>
		<button class="boton" onclick="motor.readfile('../contacto.html','3')"><a href="javascript:void(0)">CONTACTO</a></button>
		<button class="boton" onclick="motor.readfile('../aviso.html','4')"><a href="javascript:void(0)">AVISO</a></button>
		
		<div class="text-justify p-tit">ENG</div>
		<button class="boton" onclick="motor.readfile('../en/index.html','0')"><a href="javascript:void(0)">HOME</a></button>
		<button class="boton" onclick="motor.readfile('../en/servicios.html','1')"><a href="javascript:void(0)">SERVICIOS</a></button>
		<button class="boton" onclick="motor.readfile('../en/nosotros.html','2')"><a href="javascript:void(0)">NOSOTROS</a></button>
		<button class="boton" onclick="motor.readfile('../en/contacto.html','3')"><a href="javascript:void(0)">CONTACTO</a></button>
		<button class="boton" onclick="motor.readfile('../en/aviso.html','4')"><a href="javascript:void(0)">AVISO</a></button>
	</div>
	<div class="col-md-12 first-c " id="step2" style="display:none">
		<!-- <a id="programatically" href="#" download="date.html">Download</a> -->
		<div class="text-justify p-tit">Opciones</div>
		<button class="boton" onclick="motor.sendfile()"><a href="javascript:void(0)">SUBIR CAMBIOS</a></button>
		<button class="boton" onclick="motor.recargar()"><a href="javascript:void(0)">RECARGAR</a></button>
		
		
		
		
	</div>	
	<div class="col-md-12 first-c mob-c ">
			

	</div>		
</div>



<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="motor.js"></script>

<script>
$(".navbar-toggle").click(function(){ 

if(navigator.userAgent.match(/(iPhone|iPod|iPad)/i)){
	if($(".navbar-ex1-collapse").hasClass("in")){
	  $(".menu").css("margin-bottom","0px")	
	}else{
	   $(".menu").css("margin-bottom","135px")	
	}
}


 })
</script>
</body>
</html>