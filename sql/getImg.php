<?php

// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];  

//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
{
//indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {

      /////////coger el numero de tabla
      require_once('./getNum.php');
      //la variable $num contiene valor

      // Ruta donde se guardarán las imágenes que subamos
      $directorio = './fotos/'.$num."_".$nombre_img;
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      if(move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio)){
        echo "ha subido la foto correctamente\n";
      }else{
        echo "error el directorio ".$directorio."\n";
        $directorio=NULL;
      }

      ///////////////////
      ///////////////
		/*$sql = "INSERT INTO casa (ruta)VALUES ("."'".$directorio.$nombre_img."'".")";
		echo "insertado la ruta de foto \n";

		if ($conn->query($sql) === TRUE) {
		    echo "insertado la ruta de foto correctamente";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}*/
	 } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
       echo "$tipo";
       echo "$nombre_img";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}


?> 