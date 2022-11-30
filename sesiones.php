<?php
session_start();
var_dump($_POST);

$email=$_POST['usuario'];
$password=$_POST['password'];
$nombreServidor="localhost";
$nombreUsuario = "root";
$passwordBaseDeDatos = "";
$nombreBaseDeDatos = "pagina";

$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
if ($conn ->connect_error){
	die("connection_failed()".$conn-> connect_error);
}
$sql=sprintf("SELECT * FROM usuarios WHERE ")
/*
$sql = sprintf("SELECT * FROM usuarios WHERE email='%s' AND password = %s", mysql_real_escape_string($email),mysql_real_escape_string($password);  
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM usuarios WHERE email='%s' AND password = %s", mysql_real_escape_string($email), mysql_real_escape_string($password));
  $resultado = $conn->query($sql);
   
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';}
*/
?>