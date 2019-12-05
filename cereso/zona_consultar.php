<?php

    $host = "localhost";
    $basededatos = "cereso";
    $usuariodb = "bdcereso";
    $clavedb = "12345";
    
    try{
        $conexion = new PDO('mysql:host='.$host.';dbname='.$basededatos, $usuariodb, $clavedb);
    }catch (PDOException $e){
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>

<html lang="es">
	<head> 
		<title></title>
		<style>
		body{
			background-image: url("fondo1.jpg");
		}
		</style>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h3>consulta tabla zona</h3>
			</div>
		</header>

		<section>
			<table class="col-md-12">
            
            <table width=\"100%\" border=\"1\">
				<tr class="bg-primary">
					<th class="pad-basic">CODIGO DE ZONA</th>
					<th class="pad-basic">NOMBRE DE ZONA</th>
					<th class="pad-basic">NUMERO DEL POLICIA</th>
				<tr>

				<?php
				$query="SELECT * FROM zona";
				$consulta=$conexion->query($query);
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{
                        echo'
                        
                        <tr>
						<td>'.$fila['CODZONA'].'</td>
						<td>'.$fila['ZONA'].'</td>
						<td>'.$fila['NUMPOLICIA'].'</td>
                        </tr>
                        
						';
					}
				?>
			</table>
		</section>
		<center>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<input type="button" value="regresar" class="btn btn" onclick="location.href='menu.php' "name="menu"/>
	    </center>
</body>
</html>