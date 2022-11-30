

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar secion</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
    <form class="formulario" method="post" action="login.php">
    
    <h1>Iniciar Secion</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="usuario" placeholder="Nombre de usuario">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="contraseña" placeholder="Contraseña">
         
         </div>
         <input type="submit" value="Inicias Secion" class="button">
         <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
     </div>
    </form>
</body>
</html>