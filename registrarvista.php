<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
 <form class="formulario" method="post">
    
    <h1>Registrate</h1>
     <div class="contenedor">

         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text"  name="usuario" placeholder="Nombre de Usuario">
         </div>
         
        <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" name="contraseña" placeholder="Contraseña">
         </div>

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" name="correo" placeholder="Correo Electronico">
         </div>

        <div class="input-contenedor">
        <i></i>
         <input type="text" name="sexo" placeholder="Sexo: Masculino o Femenino">
     </div>

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
         </div>

        <div class="input-contenedor">
        <input type="text" name="ciudad" placeholder="Cuidad de Residencia">
        </div>

         <div class="input-contenedor">
         <i class=""></i>
         <input type="text" name="pais" placeholder="País de Residencia">
         </div>
<br>
         <input type="submit" name="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>