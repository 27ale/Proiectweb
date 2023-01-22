<!DOCTYPE html>
<html>
<body>

<h1>Datele introduse in formular:</h1>

<?php

$nameErr=$first_name="";
if (empty($_POST["first_name"])) {
    $nameErr = "Introduceti numele!";
  } else {
    $first_name = $_POST["first_name"];
  }
?>

Nume:  <?php echo $first_name.$nameErr; ?><br>
Prenume: <?php echo $_POST["last_name"]; ?>

<?php
//database connection 'client'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parfscent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$age=$_POST['age'];

$sql = "INSERT INTO client ( first_name, last_name, email, age)
VALUES ('$first_name', '$last_name', '$email','$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>