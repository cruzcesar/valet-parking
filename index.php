<?php
   require_once("php/sesion.class.php");
   require_once("php/config.php");
   $sesion = new sesion();
   if( isset($_POST["iniciar"]) )
   {
   	$email= $_POST["email"];
   	$contrasena = $_POST["contrasena"];
   	if(validarUsuario($email,$contrasena) == true)
   	{			
   	 $sesion->set("email",$email);
     $consulta = "select nombre,area,roles,sucursal,turno,foto from empleados where email = '$email';";
     $result = $con->query($consulta);
     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $nombre=$row['nombre'];
            $area=$row['area'];
            $roles=$row['roles'];
            $sucursal=$row['sucursal'];
            $turno=$row['turno'];
            $foto=$row['foto'];
        }
     } 
     $sesion->set_datos("nombre",$nombre);
     $sesion->set_area("area",$area);
     $sesion->set_roles("roles",$roles);
     $sesion->set_sucursal("sucursal",$sucursal);
     $sesion->set_turno("turno",$turno);
     $sesion->set_foto("foto",$foto);
   		header("location: admin.php?id=correcto");
   	}
   	else 
   	{
      header("Location: index.php?id=incorrecto");
   	}
   }
   function validarUsuario($email, $contrasena)
   {
   include 'php/config.php';
   	$consulta = "select contrasena from empleados where email = '$email';";
   	$result = $con->query($consulta);
   	if($result->num_rows > 0)
   	{
   		$fila = $result->fetch_assoc();
   		if( strcmp($contrasena,$fila["contrasena"]) == 0 )
   			return true;						
   		else					
   			return false;
   	}
   	else
   			return false;		
   }
   ?>
<?php include 'php/header_login.php';?>
<body>
  

   <div  class="imagen_inicio">
   <div class="container">
   <div class="row">
   <div class="col-md-4">
   
   </div>
   <div class="col-md-5" style="background:rgba(255,255,255, 0.9); width:100%; height:auto;margin-top:200px;padding:30px;  border-radius: 15px;">
  
   <p style="text-align:center;">
                  <img src="img/logo_restaurante.png" style="width:68%; height:auto;" alt="">
               </p>


               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <div class="input-group-prepend">
                     <div class="input-group-text"><i class="fa fa-user" style="font-size:25px; color:#000;"></i></div>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="input-group-prepend" style="margin-top:25px;">
                     <div class="input-group-text"><i class="fa fa-envelope" style="font-size:25px; color:#000;"></i></div>
                     <input type="password" class="form-control" id="contrasena" name="contrasena"   placeholder="Password">
                  </div>
                  <p style="margin-top:5px;">
                  </p>
                  <?php
                     if(isset($_GET["id"]) && !empty($_GET["id"])){
                     if($_GET["id"] == "incorrecto"){
                     ?>
                  <p style="margin-top:10px;">
                     <a href="" style="text-decoration: none; color:red;font-weight:600;">Usuario no registrado</a>
                  </p>
                  <?php
                     }else if($_GET["id"] == "correcto"){
                     ?>
                  <h2 style="color:red;text-align:center; font-size:20px; margin-top:15px;">Usuario Registrado con Exito</h2>
                  <?php
                     }
                     }
                     ?>
                  <p style="margin-top:15px;">
                     <a href="" style="text-decoration: none;">¿ Olvidaste la contraseña ?</a>
                  </p>
                  <p style="text-align: center;margin-top:35px;">
                     <input type="submit" id="btn-inicio-sesion" class="btn btn-primary" name="iniciar"
                        value="Acceder" style="width: 100%; background:#6d7fcc;">
                  </p>
                 
                  <p style="margin-top:57px;"></p>
               </form>
   </div>
   <div class="col-md-4">
  
   </div>
   </div>
   </div>
   </div>
   


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>