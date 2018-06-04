<?php 

$nameBD="people_vf";
$operacion="consulta";
$newbase = new baseDB;
$newbase->Abreconexion($nameBD);
if($operacion=="consulta"){
	$consulta = "SELECT * FROM usuarios";
	$newbase->consulta($consulta);
}
	
class baseDB{ 
var $basename; 
function Abreconexion($basename){
	//$link = mysqli_connect("localhost", "edgar", "1",$basename);	
	
}
function consulta(){
	$link = mysqli_connect("localhost", "peoplecontacto", "nueva2030","people_vf");	
	if (mysqli_connect_errno()) {
		printf("Error de conexión: %s\n", mysqli_connect_error());
		exit();
	}
	$nombre=$_POST['nombre'];
	$passw=$_POST['pass'];
	if(empty($nombre) || empty($passw)){
		header("Location: index.html");
		exit();
	}
	$sql = "SELECT * FROM usuarios where nombre='".$nombre."'";
	
	$result = mysqli_query($link,$sql);
	if($row = mysqli_fetch_row($result)){
	// if($row = $result->fetch_array($result)){
	// print_r ($row);
	if($row[1] == $passw){
		session_start();
	$_SESSION['nombre'] = $nombre;
	header("Location: X0904adminDefPhp.php");
	}else{
		header("Location: index.html");
		exit();
	}
	}else{
		header("Location: index.html");
		exit();
	}


	
	
}


}


?>

