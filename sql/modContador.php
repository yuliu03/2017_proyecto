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

$sql = "SELECT num FROM contador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$num=(int)$row["num"];
    		// echo "$num\n";
         $inc=$num+1;
         echo "$inc\n";
    }
    $sql = "UPDATE contador SET num =".$inc;

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";  

	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

} else {
    echo "0 results";
}
$conn->close();
?> 