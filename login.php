<?php
session_start();
var_dump($_POST);

$nombreservidor="localhost";
$nombreusuario="root";
$passwordBaseDatos="";
$nombreBaseDatos="pagina";

$usuario=$_POST['usuario'];
$password=$_POST['contraseña'];

$conn=new mysqli($nombreservidor,$nombreusuario,$passwordBaseDatos,$nombreBaseDatos);
if ($conn -> connect_error) {
	die("connection_failed()".$conn->connect_error);
}
$sql=mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario='".$usuario."'and contraseña='".$password."'");
$nr=mysqli_num_rows($sql);

if ($nr==1) {
	header("location: index.html");
}
else if($nr==0){
	echo'<script type="text/javascript"> alert("¡El usuario o la contraeña son incorrectos!");</script>';
}
?>
