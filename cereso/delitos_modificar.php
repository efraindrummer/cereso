<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-5">
  	<center><h1>delitos_modificar</h1></center>

  	<form method="POST" action="delitos_modificar.php" class="form-inline">
  		
      <center>
  		<br>
  		<div class="form-group">
      		<label for="NUMDELITO">Numero de delito:</label>
			<input type="text" placeholder="Introduce el numero de delito" name="NUMDELITO" class="form-control" id="NUMDELITO" size="44px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="NOMDELITO">Nombre del delito:</label>
			<input type="text" placeholder="Introduce su nombre"  name="NOMDELITO" class="form-control" id="NOMDELITO" size="43px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="MIN_DELITO">Años minimos de delito:</label>
			<input type="text" placeholder="Introduce la cantidad de años del delito" name="MIN_DELITO" class="form-control" id="MIN_DELITO" size="51px">
		</div>
        <br><br>
		<div class="form-group">
      		<label for="MAX_DELITO">Años maximos de delito:</label>
			<input type="text" placeholder="Introduce la cantidad de años maxima" name="MAX_DELITO" class="form-control" id="MAX_DELITO" size="51px">
		</div>
        </center>
        <center>
  			<br><br>
  			<input type="submit" value="modificar" class="btn btn-primary" name="modificar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['modificar'])){

            include("abrir_conexion.php");
    
            $NUMDELITO = $_POST['NUMDELITO'];
            $NOMDELITO = $_POST['NOMDELITO'];
            $MIN_DELITO = $_POST['MIN_DELITO'];
            $MAX_DELITO = $_POST['MAX_DELITO'];;
    
            if($NUMDELITO == "" || $NOMDELITO == "" || $MIN_DELITO == "" || $MAX_DELITO == ""){

                echo "es nesecario que llene todos los campos";

            }else{

                $existe=0;
    
                $resultados = mysqli_query($conexion,"SELECT * FROM $delito WHERE NUMDELITO = '$NUMDELITO'");
                while($consulta = mysqli_fetch_array($resultados)){
    
                    $existe++;
                }

                if($existe==0){

                    echo "el numero de delito no se encuentra";

                }else{
               
                $_UPDATE_SQL="UPDATE $delito Set NUMDELITO = '$NUMDELITO', NOMDELITO = '$NOMDELITO', MIN_DELITO = '$MIN_DELITO', MAX_DELITO = '$MAX_DELITO' WHERE NUMDELITO ='$NUMDELITO'";   
                mysqli_query($conexion,$_UPDATE_SQL); 
                echo "modificacion con exito";
                }
            } 
    
            include("cerrar_conexion.php");   
        }
    ?>  
    
</body>
</html>