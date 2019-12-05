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
  	<center><h1>zona_insertar</h1></center>

  	<form method="POST" action="zona_modificar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="CODZONA">Codigo de zona:</label>
			<input type="text" placeholder="Introduce el numero de zona" name="CODZONA" class="form-control" id="CODZONA" size="40px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="ZONA">Zona:</label>
			<input type="text" placeholder="Introduce la zona"  name="ZONA" class="form-control" id="ZONA" size="50px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="NUMPOLICIA">Numero de polica:</label>
			<input type="text" placeholder="Introduce el numero de policia" name="NUMPOLICIA" class="form-control" id="NUMPOLICIA" size="38px">
		</div>

  		</center>
  		<center>
  			<br><br>
  			<input type="submit" value="ENVIAR" class="btn btn-primary" name="modificar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['modificar'])){

            include("abrir_conexion.php");
    
            $CODZONA = $_POST['CODZONA'];
            $ZONA = $_POST['ZONA'];
            $NUMPOLICIA = $_POST['NUMPOLICIA'];
    
            if($CODZONA == "" || $ZONA == "" || $NUMPOLICIA == ""){

                echo "es nesecario que llene todos los campos";

            }else{

                $existe=0;
    
                $resultados = mysqli_query($conexion,"SELECT * FROM $zona WHERE CODZONA = '$CODZONA'");
                while($consulta = mysqli_fetch_array($resultados)){
    
                    $existe++;
                }

                if($existe==0){

                    echo "el codigo de zona no se encuentra";

                }else{
               
                $_UPDATE_SQL="UPDATE $zona Set CODZONA = '$CODZONA', ZONA = '$ZONA', NUMPOLICIA = '$NUMPOLICIA' WHERE CODZONA ='$CODZONA'";   
                mysqli_query($conexion,$_UPDATE_SQL); 
                echo "modificacion con exito";
                }
            } 
    
            include("cerrar_conexion.php");   
        }
    ?>  
    
</body>
</html>