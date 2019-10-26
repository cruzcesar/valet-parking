<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Forms</title>
</head>
<body>
<?php
require_once ('config.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$curso = $_POST['curso'];

if(!is_uploaded_file($_FILES['comprobante_pago']['tmp_name']))
   {
    /*echo "Error al subir archivo";*/
	 header("location: ../admin.php?id=error"); 
    } else {
	 $sql = "UPDATE usuarios SET imagen_pago='img_pagos/".$_FILES['comprobante_pago']['name']."' WHERE email='$email'";
     move_uploaded_file($_FILES['comprobante_pago']['tmp_name'],"../img_pagos/".$_FILES['comprobante_pago']['name']);
            
	if ($con->query($sql) === TRUE) {
	 header("location: ../admin.php?id=valido"); 
    
	
	} else{
	
	///header("location: ../insertar_user.php?id=incorrecto");
	}
	}
?>
</body>
</html>