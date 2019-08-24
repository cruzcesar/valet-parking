<?php
   require_once("php/sesion.class.php");
   require_once("php/config.php");
   
   $sesion = new sesion();
   $email = $sesion->get("email");
   $nombre = $sesion->get_datos("nombre");
   $area = $sesion->get_area("area");
   $roles = $sesion-> get_roles("roles");
   $sucursal = $sesion-> get_sucursal("sucursal");
   $turno = $sesion-> get_turno("turno");
   $foto = $sesion-> get_foto("foto");
   if( $email == false )
   {	
   	header("Location: index.php");		
   }
   
   else 
   {
   $email=$_SESSION['email'];
   ?>
<?php 
   }include 'php/header-interiores.php';
   
   ?>
<body>
   <div style="background:#6d7fcc; width:100%; height:90px;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
               <p style="margin-top:28px;">
               <li style="display:inline-block;">
                  <a href="administrador.php" style="color:#fff; text-decoration: none;"> <i class="fa fa-home" style="font-size:25px; color:#fff;"></i>
                  <span style="font-size: 17px; position:relative;left:15px;">
                  Ir al Panel 
                  </span>    
                  </a>
               </li>
               </p>
            </div>
            <div class="col-md-6">
               <p style="text-align:right;"><a href="" style="color:#fff; font-size:14px; position:relative;top:30px;text-decoration:none;"><?php echo $email?> <i class="fas fa-caret-down" style="font-size:20px;position:relative;top:3px; left:2px;"></i></a></p>
            </div>
         </div>
      </div>
   </div>
   <form action="">
      <div style="margin-top:100px;">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <!--<label for="nombre">Nombre Completo</label>-->
                  <input type="text" class="form-control " id="nombre" placeholder="Pedro Pérez Hernandez" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div class="col-md-6">
                  <input type="tel" class="form-control " id="telefono" placeholder="Ejemplo 55-4050-6500" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div style="margin-top:100px;"></div>
               <div class="col-md-4">
                  <select class="custom-select " >
                     <option selected>Selecciona Turno</option>
                     <option value="1">Primer Turno</option>
                     <option value="2">Segundo Turno</option>
                     <option value="3">Tercer Turno</option>
                  </select>
               </div>
               <p style="margin-top:50px;"></p>
               <div class="col-md-4">
                  <select class="custom-select " >
                     <option selected>Selecciona Area</option>
                     <option value="1">Comedor</option>
                     <option value="2">Barra</option>
                     <option value="3">Caja</option>
                     <option value="4">Parrilla</option>
                     <option value="5">Cocina</option>
                  </select>
               </div>
               <p style="margin-top:50px;"></p>
               <div class="col-md-4">
                  <select class="custom-select ">
                     <option selected>Selecciona Sucursal</option>
                     <option value="1">Azteca</option>
                     <option value="2">Ecatepec</option>
                     <option value="3">Gustavo A.Madero</option>
                  </select>
               </div>
               <p style="margin-top:55px;"></p>
               <div class="col-md-3">
                  <input type="text" class="form-control " id="rfc" placeholder="RFC" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div style="margin-top:100px;"></div>
               <div class="col-md-3">
                  <select class="custom-select ">
                     <option selected>Selecciona Pais</option>
                     <option value="1">Mexico</option>
                  </select>
               </div>
               <p style="margin-top:50px;"></p>
               <div class="col-md-3">
                  <select class="custom-select ">
                     <option selected>Selecciona Estado</option>
                     <option value="1">Ciudad de Mexico</option>
                     <option value="1">Estado de Mexico</option>
                  </select>
               </div>
               <p style="margin-top:50px;"></p>
               <div class="col-md-3">
                  <select class="custom-select ">
                     <option selected>Selecciona el Municipio</option>
                     <option value="1">Ecatepec</option>
                     <option value="1">Chalco</option>
                  </select>
               </div>
               <p style="margin-top:50px;"></p>
               <div class="col-md-6">
                  <input type="text" class="form-control " id="calle" placeholder="Calle " value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div style="margin-top: 100px;"></div>
               <div class="col-md-3">
                  <input type="text" class="form-control " id="interior" placeholder="N° Interior" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <p style="margin-top:35px;"></p>
               <div class="col-md-3">
                  <input type="text" class="form-control " id="exterior" placeholder="N° Exterior" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div class="col-md-6">
                  <input type="text" class="form-control " id="colonia" placeholder="colonia " value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div class="col-md-3">
                  <select class="custom-select ">
                     <option selected>Selecciona un Rol</option>
                     <option value="1">Mesero</option>
                     <option value="1">Cocinero</option>
                     <option value="1">Chef</option>
                  </select>
               </div>
               <p style="margin-top:50px;"></p>
               <div class="col-md-3">
                  <p style="text-align:center;"><img src="dd"></p>
               </div>
               <div class="col-md-5">
                  <input type="email" class="form-control " id="email" placeholder="Ejemplo... lopezdiaz12@gmail.com" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div class="col-md-4">
                  <input type="password" class="form-control " id="contrasena" placeholder="Password" value="" required>
                  <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                     Campo Obligatorio
                  </p>
               </div>
               <div class="col-md-3" style="position:relative;top:-20px;">
                  <p>
                     <span> Selecciona una Foto</span> 
                     <input type="file" id="foto" class="" placeholder="Foto">	 
                  </p>
               </div>
               <div class="col-md-6" style="position:relative;top:-20px;">
                  <p style="margin-top:55px; text-align:center;"> 
                     <input type="submit" id="foto"  style="width: 50%;"class="btn btn-primary" placeholder="">	 
                  </p>
               </div>
               <div class="col-md-6" style="position:relative;top:-20px;">
                  <p style="margin-top:55px; text-align:center;"> 
                     <input type="submit" id="foto"  style="width: 50%;"class="btn btn-danger" value="Cancelar" placeholder="">	 
                  </p>
               </div>
            </div>
         </div>
      </div>
   </form>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
   <!-- (Optional) Latest compiled and minified JavaScript translation files -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
</body>
</html>