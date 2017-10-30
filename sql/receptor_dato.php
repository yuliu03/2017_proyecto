 <?php
$coma=",";
$planta= htmlspecialchars($_POST['planta']).$coma;
$precio= (int)htmlspecialchars($_POST['precio']); 
echo "$planta"; 
echo "$precio";
?> 