<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODIFICAR</title>
</head>
<body>
<div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-5">
  	<center><h1>MODIFICAR POLICIA</h1></center>

  	<form method="POST" action="policia_modificar.php" class="form-inline">
  		
  	<center>
  		<br>
  		<div class="form-group">
      		<label for="NUMPOLICIA">Numero de policia:</label>
			<input type="text" placeholder="Introduce el numero del policia" name="NUMPOLICIA" class="form-control" id="NUMPOLICIA" size="40px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="NOMPOLICIA">Nombre:</label>
			<input type="text" placeholder="Introduce el nombre"  name="NOMPOLICIA" class="form-control" id="NOMPOLICIA" size="50px">
		</div>
		<br><br>
		<div class="form-group">
      		<label for="JEFEPOLICIA">Jefe:</label>
			<input type="text" placeholder="Introduce nombre del jefe" name="JEFEPOLICIA" class="form-control" id="JEFEPOLICIA" size="54px">
		</div>

  		</center>
  		<center>
  			<br><br>
  			<input type="submit" value="MODIFICAR" class="btn btn-primary" name="modificar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['modificar'])){

            include("abrir_conexion.php");
    
            $NUMPOLICIA	= $_POST['NUMPOLICIA'];
            $NOMPOLICIA = $_POST['NOMPOLICIA'];
            $JEFEPOLICIA = $_POST['JEFEPOLICIA'];
    
            if($NUMPOLICIA == "" || $NOMPOLICIA == "" || $JEFEPOLICIA == ""){

                echo "es nesecario que llene todos los campos";

            }else{

                $existe=0;
    
                $resultados = mysqli_query($conexion,"SELECT * FROM $policia WHERE NUMPOLICIA = '$NUMPOLICIA'");
                while($consulta = mysqli_fetch_array($resultados)){
    
                    $existe++;
                }

                if($existe==0){

                    echo "el numero del policia no se encuentra";

                }else{
               
                $_UPDATE_SQL="UPDATE $policia Set NUMPOLICIA = '$NUMPOLICIA', NOMPOLICIA = '$NOMPOLICIA', JEFEPOLICIA = '$JEFEPOLICIA' WHERE NUMPOLICIA ='$NUMPOLICIA'";   
                mysqli_query($conexion,$_UPDATE_SQL); 
                echo "modificacion con exito";
                }
            } 
    
            include("cerrar_conexion.php");   
        }
    ?>  
    
</body>
</html>