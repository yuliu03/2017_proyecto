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

$informacion=" "; 
/*
$n='liu';
 $t='';
 $sql = "INSERT INTO casa (planta, puerta, precio,codigo_postal,calle,zona,otro1)
 VALUES ('9','B','1000000','12345','eduardo barreiros','moncloa',"."'".$n."'".")";

echo "$sql \n//////\n";*/

/*$planta="'11',";
$puerta="'A',";
$precio="'122222',";
$codigo_postal="'12345',";
$calle="'eduardo barreiros2',";
$zona="'moncloa',";
$otro1="'nulo'";*/


//get imagen
require_once('./getImg.php');
//genera una variable $directorio con la direccion de imagen



$coma=",";
$ini="'";
$fin="'";
$planta= htmlspecialchars($_POST["planta"]);
$puerta=htmlspecialchars($_POST["puerta"]);
$precio=(int)htmlspecialchars($_POST["precio"]);
$codigo_postal=(int)htmlspecialchars($_POST["codigo"]);
$calle=htmlspecialchars($_POST["calle"]);
$zona=htmlspecialchars($_POST["zona"]);
$ruta=$directorio;



if(empty(calle)){
  echo "dato de calle esta vacio";
}
else{

      $dato=$ini.$planta.$fin.$coma.
      		$ini.$puerta.$fin.$coma.
      		$ini.$precio.$fin.$coma.
      		$ini.$codigo_postal.$fin.$coma.
      		$ini.$calle.$fin.$coma.
      		$ini.$zona.$fin.$coma.
      		$ini.$ruta.$fin.$coma.
          $ini.$num.$fin;//la variable num esta en fichero getImg.php




      /*
       comprobacion de que si el piso ya esta publicado: planta, puerta, calle, zona 
       genera una variable $duplicado que es de tipo boolean y su valor de $id para localizarlo
       */


      // echo "$dato "."\n\n";

       $sql = "INSERT INTO casa (planta, puerta, precio,codigo_postal,calle,zona,ruta,num_tabla_img) VALUES (".$dato.")";

      // echo "\n///$sql ///\n";


       if ($conn->query($sql) === TRUE) {
       	echo "inserta los datos de piso correctamente\n";
          /////
       	// $sql = "SELECT id FROM casa WHERE planta=9";
       	// $sql = "SELECT num FROM contador";
       	// echo "$sql \n";
       	// $result = $conn->query($sql);

       /*if ($result->num_rows > 0) {
          // output data of each row
       		$row = $result->fetch_assoc();
       		echo "num es: " . $row["num"]."\n";
       		$t= $row["num"];
       		echo "valor t es $t\n";*/

              //crear talba asociada
       		$nom_tabla="tabla_".$num;
       		$sql = "CREATE TABLE ".$nom_tabla."(
       		fotoId int(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       		ruta VARCHAR(100) NOT NULL,
       		id_casa INT(8) UNSIGNED,
       		reg_date TIMESTAMP,
       		FOREIGN KEY (id_casa) REFERENCES casa(id)
       		)";

       		if ($conn->query($sql) === TRUE) {
       			echo $num_tabla." created successfully\n";
       			echo "<form action='../subirFoto/subeYguardaFoto.php' enctype='multipart/form-data' method='post'>";
       			echo "<label for='imagen'>Imagen:</label> 
        				<input id='imagen' name='imagen' size='30' type='file' />
       			    <input type='submit' value='Cambiar datos' />";
       			echo "</form>";

            echo "genera la tabla de foto correctamente";

            //incrementa valor de num en la tabla contador
            require_once('./incNum.php');


       		} else {
       			echo "Error creating table de foto: " . $conn->error;
       		}

       	/*} else {
       		echo "0 results, no es posible empezar crear nueva tabla de foto";
       	}*/

          ////

       } else {
       	echo "Error: " . $sql . "<br>" . $conn->error;
       }
 }

 $conn->close();
 ?> 