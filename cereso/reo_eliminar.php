<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELIMINAR</title>
</head>
<body>
<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-5">
  	<center><h2>Eliminar reos</h2></center>

  	<form method="POST" action="reo_eliminar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="NUMREO">Numero de reo:</label>
			<input type="text" placeholder="Introduce el numero de reo a eliminar" name="NUMREO" class="form-control" id="NUMREO" size="40px">
		</div>

  		</center>
  		<center>
  			<br><br>
  			<input type="submit" value="ELIMINAR" class="btn btn-primary" name="eliminar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['eliminar'])){

            include("abrir_conexion.php");
    
            $NUMREO = $_POST['NUMREO'];
            $existe=0;
    
            if($NUMREO == ""){

                echo "es obligatorio ingresar el dato";

            }else{
                $resultados = mysqli_query($conexion,"SELECT * FROM $reos WHERE NUMREO = '$NUMREO'");
                while($consulta = mysqli_fetch_array($resultados)){
    
                $existe++;
            }
            if($existe==0){

                echo "el reo que desea eliminar no existe";

            }else{
                //ELIMINAR
                $_DELETE_SQL = "DELETE FROM $reos WHERE NUMREO = '$NUMREO'";
                mysqli_query($conexion,$_DELETE_SQL); 
                echo "eliminacion correcta";
            }
            }
        }

    ?>  
</body>
</html>   