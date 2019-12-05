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
  	<center><h1>ELIMINAR POLICIA</h1></center>

  	<form method="POST" action="policia_eliminar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="NUMPOLICIA">Numero de policia:</label>
			<input type="text" placeholder="Introduce el numero del policia a elimiar" name="NUMPOLICIA" class="form-control" id="NUMPOLICIA" size="40px">
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
    
            $NUMPOLICIA = $_POST['NUMPOLICIA'];
            $existe=0;
    
            if($NUMPOLICIA == ""){

                echo "es obligatorio ingresar el dato";

            }else{
                $resultados = mysqli_query($conexion,"SELECT * FROM $policia WHERE NUMPOLICIA = '$NUMPOLICIA'");
                while($consulta = mysqli_fetch_array($resultados)){
    
                $existe++;
            }
            if($existe==0){

                echo "el policia que desea eliminar no existe";

            }else{
                //ELIMINAR
                $_DELETE_SQL = "DELETE FROM $policia WHERE NUMPOLICIA = '$NUMPOLICIA'";
                mysqli_query($conexion,$_DELETE_SQL); 
                echo "eliminacion correcta";
            }
            }
        }

    ?>  
    
</body>
</html>