<!DOCTYPE html>
<link href="estilo.css" rel="stylesheet" type="text/css">

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<style type="text/css">
		
		/*img{
			margin: 0px;
			padding: 0px;
			height: 10%;
			border: 3px solid yellow;

		}*/
/*
		#imagen{
			 background-image: url(./p1.png);
			 background-repeat: no-repeat;
			float: left;
			width: 30%;
			border: 3px solid green;
			height: 200px;
		}*/

		img{
			float: left;
			width: 30%;
			border: 3px solid green;
			height: 200px;
		}

		#descripcion{
			float: left;
			border: 3px solid red;
			width: 66%;
			margin-left: 1px;
		}

		.contenido{
			width: 90%;
		}

/*		#imagen2{
			
			width: 30%;
			border: 3px solid green;
		}*/

	</style>
	<title></title>
</head>
<body>
<script type="text/javaScript">
	/*	// creamos ahora una array en javascript.
		var dato      = [];
		var datos	  = [];

	<?php  

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id, firstname, lastname ,email FROM MyGuests";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table>";  
			echo "<tr>";  
			echo "<th>Nombre</th>";  
			echo "<th>Comentario</th>";  
			echo "<th>Fecha</th>";  
			echo "</tr>";
			
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo 'dato.push("'.$row["id"].'");';
		        echo 'dato.push("'.$row["firstname"].'");';
		        echo 'dato.push("'.$row["lastname"].'");';
		        echo 'dato.push("'.$row["email"].'");';
		        echo 'datos.push(dato);';
		      
			   
		    }
		} 
		echo "</table>"; 
		
		$conn->close();

	?>*/

	
</script>

	
	<?php  

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id, firstname, lastname ,email FROM MyGuests";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			/*echo "<table>";  
			echo "<tr>";  
			echo "<th>id</th>";  
			echo "<th>firstname</th>";  
			echo "<th>lastname</th>";  
			echo "<th>email</th>";
			echo "</tr>";*/
			
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       /* echo "<tr>";  
			    echo "<td>$row[id]</td>";  
			    echo "<td>$row[firstname]</td>";  
			    echo "<td>$row[lastname]</td>"; 
			    echo "<td>$row[email]</td>";  
			    echo "</tr>";  */

			    echo "<div class='contenido'>";
			    	echo "<img src='./p1.png'>";
			    	
			    	echo "<div id='descripcion'>";
			    	echo "<center>";
			    		echo "<a href='./mostrarBD.php'>
			    		picha aqui para ir a la pagina principal
			    		</a>";
			    	echo "<center>";

			    	echo "<h4>1000</h4>";
			    	echo "<p>descripcion, Entrada disponible desde YA. 
			    	Habitación muy luminosa equipada con un escritorio, 
			    	silla de estudio, armario, cama individual 
			    	(90 cm de an...</p>";
			    	echo "<p>contacto 1234455  correo 222222</p>";

			    	echo "</div>";
			    echo "</div>";
			    

		    }
		} 
		/*echo "</table>"; */
		
		$conn->close();

	?>


	<!-- <div id="contenedor">
	<div id="cabecera">
	cabecera
	</div>
	
	<div id="menu">
		menu
	</div>
	
	<div class="contenido">
		
			
		</div> 
		<img src="./p1.png">
		

		<div id="descripcion">
			<center> 
				<a href="./mostrarBD.php">picha aqui para ir a la pagina principal</a>
			</center>
				<h4>1000</h4>
				<p>descripcion, Entrada disponible desde YA. Habitación muy luminosa equipada con un escritorio, silla de estudio, armario, cama individual (90 cm de an...</p>
				<p>contacto 1234455  correo 222222</p>
		</div>
			
    </div>

    <div class="contenido">
		
			 <img id="img2" src="p1.png" > 
		</div> 
		
		<img src="./p1.png">

		<div id="descripcion">
			<center> 
				<a href="./mostrarBD.php">picha aqui para ir a la pagina principal</a>
			</center>				<h4>1000</h4>
				<p>descripcion, Entrada disponible desde YA. Habitación muy luminosa equipada con un escritorio, silla de estudio, armario, cama individual (90 cm de an...</p>
				<p>contacto 1234455  correo 222222</p>
		</div>
			
    </div>
	
	</div> 
	
	<div id="pie">
	pie
	</div> -->
	
</body>

<script type="text/javascript">


//mostrar los datos
	//document.getElementById("menu").innerHTML = datos;
	// var hola="nuevo";
	// var id="id = 'panel'";
	// document.getElementById("contenido").innerHTML ="<div "+id+">"+ " <div>"+"Panel Heading"+"</div><div>Panel Content"+hola+"</div><div>Panel Footer</div>" ;
	// document.getElementById("contenido").innerHTML +="<div "+id+">"+ " <div>"+"Panel Heading"+"</div><div>Panel Content"+hola+"</div><div>Panel Footer</div>" ;

	//var x="<b>Appended text</b>";
	
</script>


</html>


 


