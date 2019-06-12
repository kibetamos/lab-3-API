<?php
$Servername ="localhost";
$Username ="root";
$Password="";
$dbName="login";

$conn = new mysqli($Servername ,$Username ,$Password, $dbName);
if ($conn-> connection_error){
	die("Connection failed:". $conn->connect_error);

}
$sql ="INSERT INTO customer(fname,lname) VALUES ('amos', 'kibet')";
if ($conn->query($sql) == TRUE){
	echo "new record created";

} else{
echo "ERROR".$sql ."<br>".$conn->error;
}
$conn->close();

?>