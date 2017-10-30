 <?php

$sql = "SELECT num FROM contador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$num=(int)$row["num"];
    		// echo "$num\n";
         $inc=$num+1;
         echo "valor de inc $inc\n";
    }

    $sql = "UPDATE contador SET num =".$inc;

	if ($conn->query($sql) === TRUE) {
	    echo "actctualiza correcta";  

	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

} else {
    echo "no encuantra dato";
}
?> 