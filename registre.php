<?php

include("connect_mysql.php");

if (isset($_POST['submit'])) {
	if (strlen($_POST['usuario'])>=1 && strlen($_POST['contraseña'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['sexo'])>=1 && strlen($_POST['fecha_nacimiento'])>=1 && strlen($_POST['ciudad'])>=1 && strlen($_POST['pais'])>=1){
		$user=$_POST['usuario'];
		$password=$_POST['contraseña'];
		$email=$_POST['correo'];
		$sexo=$_POST['sexo'];
		$date=$_POST['fecha_nacimiento'];
		$city=$_POST['ciudad'];
		$contry=$_POST['pais'];
		$consulta="INSERT INTO usuarios(usuario,contraseña,correo,sexo,fecha_nacimiento,ciudad,pais) VALUES ('$user','$password','$email','$sexo','$date','$city','$contry')";
		$resultado= mysqli_query($conect,$consulta);
		if ($resultado) {
        echo'<script type="text/javascript"> alert("¡Te has registrado exitosamente!"); window.location.href="loginvista.php"; </script>';
		}
		else{
        echo'<script type="text/javascript"> alert("¡Ups algo salio mal intentelo mas tarde!");</script>';
		}
	}
	else{
		echo'<script type="text/javascript"> alert("¡Complete todos los campos!");</script>';
	}
} 
?>