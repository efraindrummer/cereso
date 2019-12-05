<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO TRABAJO</title>
</head>
<body>
<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-5">
  	<center><h1>trabajan_insertar</h1></center>

  	<form method="POST" action="trabajan_insertar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="NUMREO">Numero de reo:</label>
			<input type="text" placeholder="Introduce el numero de reo" name="NUMREO" class="form-control" id="NUMREO" size="44px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="CVE_TRABAJO">Clave del trabajo:</label>
			<input type="text" placeholder="Introduce su clave"  name="CVE_TRABAJO" class="form-control" id="CVE_TRABAJO" size="42px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="TRABAJO">Trabajo:</label>
			<input type="text" placeholder="Trabajo del reo" name="TRABAJO" class="form-control" id="TRABAJO" size="51px">
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
            $CVE_TRABAJO = $_POST['CVE_TRABAJO'];
            $TRABAJO = $_POST['TRABAJO'];
    
            $conexion->query("INSERT INTO $trabajo (NUMREO,CVE_TRABAJO,TRABAJO) values ('$NUMREO','$CVE_TRABAJO','$TRABAJO')");
    
            echo "insercion ejecutada correctamente";
    
            include("cerrar_conexion.php");
        }
    ?>  
    
</body>
</html>