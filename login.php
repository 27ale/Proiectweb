<!DOCTYPE html>
<html>
<body>

<?php

include("config.php")

$sql = "SELECT * from client WHERE first_name='".$_POST["first_name"]."' and last_name='".$_POST["last_name"]."'";
echo $sql."<br>";

//$sql="SELECT * from clienti WHERE id_client=1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID CLIENT: ".$row["id_client"]."<br>";
		echo "NUME CLIENT:".$row["first_name"]."<br>";
	    echo "PRENUME CLIENT:".$row["last_name"]."<br>";
		echo "Email:".$row["email"]."<br>";
		echo "Varsta:".$row["age"]."<br>";
        echo "Numarul de telefon:".$row["phone_number"]."<br>";
      
    }
} else {
    echo "Nu exista clientul cu acest nume!";
}
$conn->close();

?>

</body>
</html>