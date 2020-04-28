<?php
$link=mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");;
$db=mysql_select_db("usuario",$link) or die("<h2>Error de conexion</h2>");

$nombre=$_POST('nombreUsuario');
$nick=$_POST('nickUsuario');
$email=$_POST('emailUsuario');
$passwd=$_POST('passUsuario');
$rpass=$_POST('RpassUsuario');

$req= (strlen($nombre)*strlen($nick)*strlen($email)*strlen($email)*strlen($passwd)*strlen($rpass)) or die('No se han llenado todos los campos <br><br><a herf="registro.html'>Volver</a>");
if ($passwd != $rpass) {
	die("Las contraseñas no coinciden <br><br><a herf="registro.html"> Volver</a>");
	# code...
}

$contrseñaUsuario= md5($passwd);


mysql_query("INSERT INTO datos VALUES ('','$nombre','$nick','$email','$contrseñaUsuario')",$link) or die("<h2>Error de envio</h2>");

echo '

	<h2>Regisro Completo</h2>
	<h5>Gracias por registrarse en nuestra web, ya puedes ingresar como usuario</h5>
	<a herf="inicio.html">Logearse</a>



';
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.0.2
 */

/**
 * Database `datos`
 */

/* `datos`.`datos` */
$datos = array(
);
