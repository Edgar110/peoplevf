<?php

$file=$_REQUEST['file'];
$url=$_REQUEST['url'];  
$myfile = fopen($url, "w") or die("Unable to open file!");
fwrite($myfile, $file);
fclose($myfile);



// $ftp_server = "160.153.63.196";
// $user = "edgar110@jovo.com.mx";
// $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");


// $pass=$_REQUEST['pss']; 	

// $login = ftp_login($ftp_conn, $user, $pass);

// $file=$_REQUEST['file'];
// $serverfile=$_REQUEST['Sfile'];

// if (ftp_put($ftp_conn, $serverfile, $file, FTP_ASCII)) {
 // echo "se ha cargado $file con éxito\n";
// } else {
 // echo "Hubo un problema durante la transferencia de $file\n";
// }
 
// ftp_close($ftp_conn);



?>