
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

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
   <div style="background:#6d7fcc; width:100%; height:auto;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
               <p style="margin-top:28px;">
               <ul>
               <li style="display:inline-block;">
                  <a href="admin.php" style="color:#fff; text-decoration: none;"> <i class="fa fa-home" style="font-size:25px; color:#fff;"></i>
                  <span style="font-size: 17px; font-weight:800; position:relative;left:15px;">
                  Ir al Panel
                  </span>    
                  </a>
               </li>
               <li style="display:inline-block; margin-left:50px;">
              
               <i class="fas fa-undo-alt" style="font-size:22px; position:relative;top:1px;left:2px;color:#fff;"></i>
               <span ><a href="menu.php?opcion=empleados" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  Alta de Empleados
                  </span>    
                  </a>
               </li>
               </ul>
               
               
               </p>
             
            </div>
            
            <div class="col-md-3"></div>
                               <div class="col-md-3" style="">
                               <div>
               <p class="email-stylos">
                  <a href="javascript:MyFunction();" id="abrir" style="position:relative; top:8px;">
                  <?php echo $sesion->get("email"); ?>
                  </a>
                  <i class="fa fa-caret-down" aria-hidden="true" style="position:relative; top:8px;"></i>
               </p>
               <div class="cerrar_login" id="perfil" style="margin-top:10px;">
                  <p>
                     <img src="<?php echo $foto; ?>" class="img-perfil" alt="User Image">
                  </p>
                  <p class="parrofo_peril">
                     <?php echo $roles; ?>
                  </p>
                  <p class="parrafo-sucursal"> Sucursal
                     <?php echo $sucursal; ?>
                  </p>
                  <div class="contener-perfil">
                     <a href="php/cerrarsesion.php" class="btn btn-light" style=""> Salir</a>
                     <p id="cerrar" class="btn btn-light"> 
                        <a href="" style="text-decoration:none; color:#2e2e2e;">Cerrar</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div style="margin-top:80px;">
   <form action="php/registro.php" method="post" enctype="multipart/form-data" >
   <div class="container">
    <div class="row">
    
    <div class="col-md-6">
                 
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

              <div style="margin-top:60px;"></div>
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





    <div class="col-md-4">
    <select class="custom-select" name="nacionalida" id="pais">Slecciona Pais</select>
    </div>
    <div class="col-md-4">
    
    <select class="custom-select" id="estados_regiones" name="edo">

    <option>Selecciona tu estado</option>

    </select>
   
                 
    </div>
                           <div class="col-md-4">
                          
                           <select class="custom-select" id="municipios_estados" name="municipio"><option>Selecciona tu municipio</option></select>
                           

                          
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
                  <input class="btn btn-primary" name="submit" style="width:50%;"  type="submit" value="Registrar">
                  </p>
                  
               </div>
               <div class="col-md-6" style="position:relative;top:-20px;">
                  <p style="margin-top:55px; text-align:center;"> 
                     <input type="submit" id=""  style="width: 50%;"class="btn btn-danger" value="Cancelar" placeholder="">	 
                  </p>
               </div>




                          
                           



    </div>
    </div>
   


   
   
   </form>
   </div>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
   <!-- (Optional) Latest compiled and minified JavaScript translation files -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







                     
<script>
$(document).ready(function() {

   $.ajax({
type: "POST",
url: "php/regiones_pais.php",
data: { pais : "Pais" } 
}).done(function(data){
$("#pais").html(data);
});

   $.ajax({
type: "POST",
url: "php/regiones_pais.php",
data: { estados : "Mexico" } 
}).done(function(data){
$("#estados_regiones").html(data);
});
// Obtener municipios
$("#estados_regiones").change(function(){
var estado = $("#estados_regiones option:selected").val();
$.ajax({
type: "POST",
url: "php/regiones_pais.php",
data: { municipios : estado } 
}).done(function(data){
$("#municipios_estados").html(data);
});
});

});
</script>
   </body>
</html>