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
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];



                    

        $sql = "SELECT email FROM contacto WHERE email='$email'";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {

          
		   header("location: ../contacto-articulos.php?id=registrado"); 

        } else {

            
             $sql = "INSERT INTO contacto (nombre,email,asunto,mensaje) VALUES ('$nombre','$email','$asunto','$mensaje')";
           
            
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

$smtp->MsgHTML("<strong> Bienvenido </strong> ".$nombre. "</b></h4> Gracias por contactarnos espera una pronta respuesta:<hr><br><b>");//mensaje o cuerpo del correo 

if(!$smtp->Send()) {
echo "Hubo un error: " . $correo->ErrorInfo;
} else {
echo "";
}

			header('Location: ../contacto-articulos.php?id=correcto');
            }
			else {

          
			header("location: ../contacto-articulos.php?id=incorrecto");

        }
    }

    

?>
</body>
</html>