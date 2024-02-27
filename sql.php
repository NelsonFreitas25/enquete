<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
print_r($_POST);
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO alunos (senha, Email) VALUES ('$senha', '$email')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
