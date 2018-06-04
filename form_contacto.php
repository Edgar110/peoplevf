<?php 

$nameBD="people_vf";
$operacion="inserta";
$newbase = new baseDB;
$newbase->Abreconexion($nameBD);
if($operacion=="inserta"){
	$newbase->agregadatos();	
}elseif($operacion=="consultaini"){
	$consulta = "SELECT * FROM datos";
	$newbase->query($consulta);	
}elseif($operacion=="modifica"){
	$newbase->modifica();	
}
	
class baseDB{ 
   	var $basename;  
function Abreconexion($basename){ 
	//dev
	//if(!($iden = mysql_connect("localhost", "edgar", "1")))
	//prod
	 // if(!($iden = mysql_connect("localhost", "peoplecontacto", "nueva2030"))) 
		// die("Error: No se pudo conectar");
	
	// if(!mysql_select_db($basename, $iden)) 
		// die("Error: No existe la base de datos");  
	
	// $conn = new mysqli("localhost", "peoplecontacto", "nueva2030");	
	// if ($conn->connect_error) {
		// die("Connection failed: " . $conn->connect_error);
	// } 
		// echo "Connected successfully";
} 
function agregadatos(){
	$nombre=$_REQUEST['nombre'];
	$correo=$_REQUEST['correo'];
	$telefono=$_REQUEST['telefono'];
	$web=$_REQUEST['web'];
	$comentario=$_REQUEST['comentario'];
    
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $correo)){ 
		echo "<center>Correo inválido</center>";
		exit();
	}

	if(!eregi("^[0-9]*$",$telefono){
		echo "<center>El campo de teléfono solo acepta números</center>";
		exit();
	}

	if(strlen($telefono)>12 ){
		echo "<center>El campo de teléfono acepta hasta 12 números</center>";
		exit();
	}

	$link = mysqli_connect("localhost", "peoplecontacto", "nueva2030","people_vf");	
	if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

	$sql = "INSERT INTO contacto (nombre,correo,telefono,web,comentario)
	VALUES ('$nombre','$correo','$telefono','$web','$comentario')";
	mysqli_query($link,$sql);
	//mysql_query($sql);
	if(!$sql){
	echo 'error';	
	}else{
      echo 'ok_';
	}
	
}


}

$nombre=$_REQUEST['nombre'];
	$correo=$_REQUEST['correo'];
	$telefono=$_REQUEST['telefono'];
	$web=$_REQUEST['web'];
	$comentario=$_REQUEST['comentario'];
	
$msg = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTeléfono: ".$telefono."\nSitio: ".$web."\nComentario: ".$comentario;
$msg = wordwrap($msg,150);
mail("sjimenez@NETORG3280501.onmicrosoft.com","Contacto desde página web",$msg,"from: NoReply@peoplexr.com");
mail("mbrito@NETORG3280501.onmicrosoft.com","Contacto desde página web",$msg,"from: NoReply@peoplexr.com");
mail("Sergio_jimenez_salvador@hotmail.com","Contacto desde página web",$msg,"from: NoReply@peoplexr.com");
// mail("feso7ico@gmail.com","Contacto desde página web",$msg);


?>