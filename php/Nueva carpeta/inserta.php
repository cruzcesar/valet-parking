<?php
error_reporting(E_ALL);
			ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Forms</title>
</head>
<body>
<?php
require_once('class.phpmailer.php');
require_once('config.php');
include_once("class.smtp.php");

		$smtp = new PHPMailer();

require_once ('config.php');
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$configcontrasena = $_POST['configcontrasena'];
$curso = $_POST['curso'];


    if ( $contrasena == $configcontrasena ) {                

        $sql = "SELECT email FROM usuarios WHERE email='$email'";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {

           /* echo "Error el usuario ya esta registrado";*/
		   header("location: ../registro-users.php?id=registrado"); 

        } else {

            /*$hash = password_hash($password,PASSWORD_DEFAULT);*/
             $sql = "INSERT INTO usuarios (nombre,apellidos,direccion,telefono,edad,email,contrasena,configcontrasena,curso) VALUES ('$nombre','$apellidos','$direccion','$telefono','$edad','$email','$contrasena','$configcontrasena','$curso')";
           
            
            if ($con->query($sql) === TRUE) {

$smtp->SMTPAuth   = true;
$smtp->SMTPSecure = "tls";
$smtp->Host       = "smtp.gmail.com";
$smtp->Username   = "bazancesar12@gmail.com";
$smtp->Password   = "aguilas12";
$smtp->Port       = 587;

$smtp->SetFrom("bazancesar12@gmail.com", "Bienvenidos");//tu corrreo



$smtp->AddAddress($email);//correo destino 

$smtp->Subject = "Datos de Acceso";//asunto 

$smtp->MsgHTML("<strong> Bienvenido </strong> ".$nombre. "</b></h4> Su Informacion de Acceso es la siguinte:<hr><br><b> Correo de acceso es: " . $email . "<br><b> El password de acceso es: </b>". $contrasena ."<br><b></p>");//mensaje o cuerpo del correo 

if(!$smtp->Send()) {
echo "Hubo un error: " . $correo->ErrorInfo;
} else {
echo "";
}
 /*header("location: ../sesion.php?id=correcto");*/ 
			header('Location: ../sesion.php?id=correcto');
            }
			else {

            /*echo "Error al registrar usuario";*/
			header("location: ../registro-users.php?id=incorrecto");

        }
    }

    } else {

       /* echo "Passwords no coincide";*/
	    header("location: ../registro-users.php?id=password"); 

    }

?>
</body>
</html>