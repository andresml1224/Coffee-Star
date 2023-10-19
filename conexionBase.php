<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeestar";
// Se crea la conexion
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die ("Conexión fallida:" . $conn->connect_error);
}


?>