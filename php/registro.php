<?php





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canadir";


$nacionalida = $_POST['nacionalida'];
$edo = $_POST['edo'];
$municipio = $_POST['municipio'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname );
$conn->set_charset('utf8');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO ayuda (nacionalida,estado, municipio)
VALUES ('$nacionalida','$edo', '$municipio')";

if (mysqli_query($conn, $sql)) {
    header("location: ../registro_empleados.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>