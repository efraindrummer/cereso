<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO ZONA</title>
</head>
<body>
<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-5">
  	<center><h1>reos_insertar</h1></center>

  	<form method="POST" action="reo_insertar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="NUMREO">Numero de reo:</label>
			<input type="text" placeholder="Introduce el numero de reo" name="NUMREO" class="form-control" id="NUMREO" size="44px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="NOMBRE">Nombre:</label>
			<input type="text" placeholder="Introduce su nombre"  name="NOMBRE" class="form-control" id="NOMBRE" size="50px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="APELLIDO">Apellido:</label>
			<input type="text" placeholder="Introduce el apellido" name="APELLIDO" class="form-control" id="APELLIDO" size="50px">
		</div>
        <br><br>
		<div class="form-group">
      		<label for="ALIAS">Alias:</label>
			<input type="text" placeholder="Introduce el alias" name="ALIAS" class="form-control" id="ALIAS" size="53px">
		</div>

  		</center>
  		<center>
  			<br><br>
  			<input type="submit" value="ENVIAR" class="btn btn-primary" name="btn_enviar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['btn_enviar'])){

            include("abrir_conexion.php");
    
            $NUMREO = $_POST['NUMREO'];
            $NOMBRE = $_POST['NOMBRE'];
            $APELLIDO = $_POST['APELLIDO'];
            $ALIAS = $_POST['ALIAS'];
    
            $conexion->query("INSERT INTO $reos (NUMREO,NOMBRE,APELLIDO,ALIAS) values ('$NUMREO','$NOMBRE','$APELLIDO','$ALIAS')");
    
            echo "insercion ejecutada correctamente";
    
            include("cerrar_conexion.php");
        }
    ?>  
    
</body>
</html>