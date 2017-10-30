 <?php


$sql = "SELECT num FROM contador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$num=(int)$row["num"];
    	
    }
} else {
    $num=99999;
}

?> 