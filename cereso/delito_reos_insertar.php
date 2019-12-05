<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO DELITO_REOS</title>
</head>
<body>
<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-5">
  	<center><h1>delito_REOS_insertar</h1></center>

  	<form method="POST" action="delito_reos_insertar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="NUMREO">Numero de REO:</label>
			<input type="text" name="NUMREO" class="form-control" id="NUMREO" size="44px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="NUMDELITO">Numero del delito:</label>
			<input type="text" name="NUMDELITO" class="form-control" id="NUMDELITO" size="43px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="REOANNO">Edad del reo:</label>
			<input type="text" name="REOANNO" class="form-control" id="REOANNO" size="48px">
		</div>
        <br><br>
		<div class="form-group">
      		<label for="NUMCELDA">Numero de celda:</label>
			<input type="text" name="NUMCELDA" class="form-control" id="NUMCELDA" size="44px">
		</div>
        <br><br>
		<div class="form-group">
      		<label for="CODZONA">Codigo de zona:</label>
			<input type="text" name="CODZONA" class="form-control" id="CODZONA" size="45px">
		</div>

  		</center>
  		<center>
  			<br><br>
  			<input type="submit" value="ENVIAR" class="btn btn-primary" name="btn_enviar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['btn_enviar'])){

            include("abrir_conexion.php");
    
            $NUMREO = $_POST['NUMREO'];
            $NUMDELITO = $_POST['NUMDELITO'];
            $REOANNO = $_POST['REOANNO'];
            $NUMCELDA = $_POST['NUMCELDA'];
            $CODZONA = $_POST['CODZONA'];
    
            $conexion->query("INSERT INTO $delito_reos (NUMREO,NUMDELITO,REOANNO,NUMCELDA,CODZONA) values ('$NUMREO','$NUMDELITO','$REOANNO','$NUMCELDA','$CODZONA')");
    
            echo "insercion ejecutada correctamente";
    
            include("cerrar_conexion.php");
        }
    ?>  
    
</body>
</html>