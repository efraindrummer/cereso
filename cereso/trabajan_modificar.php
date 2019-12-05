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
  	<center><h1>trabajan_modificar</h1></center>

  	<form method="POST" action="trabajan_modificar.php" class="form-inline">
  		
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
  			<input type="submit" value="modificar" class="btn btn-primary" name="modificar">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/> 
  		</center>

  	</form>

    <?php

        if(isset($_POST['modificar'])){

            include("abrir_conexion.php");
    
            $NUMREO = $_POST['NUMREO'];
            $CVE_TRABAJO = $_POST['CVE_TRABAJO'];
            $TRABAJO = $_POST['TRABAJO'];
    
            if($NUMREO == "" || $CVE_TRABAJO == "" || $TRABAJO == ""){

                echo "es nesecario que llene todos los campos";

            }else{

                $existe=0;
    
                $resultados = mysqli_query($conexion,"SELECT * FROM $trabajo WHERE CVE_TRABAJO = '$CVE_TRABAJO'");
                while($consulta = mysqli_fetch_array($resultados)){
    
                    $existe++;
                }

                if($existe==0){

                    echo "el numero de trabajo no se encuentra";

                }else{
               
                $_UPDATE_SQL="UPDATE $trabajo Set NUMREO = '$NUMREO', CVE_TRABAJO = '$CVE_TRABAJO', TRABAJO = '$TRABAJO' WHERE CVE_TRABAJO ='$CVE_TRABAJO'";   
                mysqli_query($conexion,$_UPDATE_SQL); 
                echo "modificacion con exito";
                }
            } 
    
            include("cerrar_conexion.php");   
        }
    ?>  
    
</body>
</html>