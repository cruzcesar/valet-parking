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
   $empleados=$_REQUEST['operaciones'];
  
   ?>
<body class="do-nicescrol">
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
                  <?php echo $empleados; ?>
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

  <?php if($empleados=='alta_empleado'){ ?>
<!--<div>
    <div class="container">
        <div class="row">
      
   
<div class="col-md-4">
<select class="custom-select" name="nacionalida" id="pais">Selecciona Pais</select>
</div>
<div class="col-md-4">
<select class="custom-select" id="jmr_contacto_estado" name="edo">

    <option>Selecciona tu estado</option>

    </select>
</div>
<div class="col-md-4">
<select class="custom-select "  id="jmr_contacto_municipio" name="municipio"><option>Selecciona tu municipio</option></select>
                           

                           <input class="form-btn" name="submit" type="submit" value="Suscribirse">
                           
</div>
  

             
        
        </div>
    </div>
</div>-->

  <?php } if($empleados=='editar_empleado'){ ?>
   <div class="imagen_inicio">
         <div class="container">
            <div class="row">
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
               <div class="col-md-3">
               <div style="background:#8049da;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista.php?turnos=primero" > <img src="img/tur1.png"  style="width:45%; height:auto; margin-top:5px;" alt=""></a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#8049da  ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista.php?turnos=segundo" > <img src="img/turno_2.png"  style="width:45%; height:auto; margin-top:7px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#8049da ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista.php?turnos=tercero" > <img src="img/turno_3.png"  style="width:45%; height:auto; margin-top:7px;" alt="">  </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#8049da ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista.php?turnos=cambiar" > <i class="fas fa-cog" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Cambiar Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               
            </div>
         </div>

        </div>

                        
  <?php } if($empleados=='baja_empleado'){ ?>

   <div class="imagen_inicio">
         <div class="container">
            <div class="row">
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
               <div class="col-md-3">
               <div style="background:#d12a0d;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista_elimina.php?turnos=primero" > <img src="img/tur1.png"  style="width:45%; height:auto; margin-top:5px;" alt=""></a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#d12a0d  ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista_elimina.php?turnos=segundo" > <img src="img/turno_2.png"  style="width:45%; height:auto; margin-top:7px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#d12a0d ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista_elimina.php?turnos=tercero" > <img src="img/turno_3.png"  style="width:45%; height:auto; margin-top:7px;" alt="">  </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#d12a0d;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empledos_lista_elimina.php?turnos=cambiar" > <i class="fas fa-cog" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Cambiar Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               
            </div>
         </div>

        </div>


  <?php } if($empleados=='numero_empleado'){ ?>


   <div class="imagen_inicio">
    <div class="container">
    
       <div class="row">
       <div class="col-md-12" style="margin-top:150px;">
       <table class="table">
  <thead class="" style="background:#15ad7b;">
    <tr>
      <th scope="col" style="color:#fff;">N° Empleado</th>
      <th scope="col" style="color:#fff;">Nombre</th>
      <th scope="col" style="color:#fff;">Roles</th>
      <th scope="col" style="color:#fff;">Turno</th>
      <th scope="col" style="color:#fff;">Area</th>
      <th scope="col" style="color:#fff;">Sucursal</th>
    </tr>
  
  </thead>
  <?php
                     require 'php/config.php';
                     
                          $sql = "SELECT id,numeroempleado,nombre,roles,area,turno,sucursal  FROM empleados ORDER BY numeroempleado DESC    limit 10 ";
                          $result = $con->query($sql);
                     
                      
                               if ($result->num_rows > 0) {
           
                                 while($row = $result->fetch_assoc()) {
                                    $turno_uno_edit = $row['numeroempleado'];
                     ?>
  <tbody style="background:#fff;">
  
    <tr>
    
      <th scope="row"><?php echo $row['numeroempleado'] ?></th>
      <td><?php echo $row['nombre'] ?></td>
      <td><?php echo $row['roles'] ?></td>
      <td><?php echo $row['turno'] ?></td>
      <td><?php echo $row['area'] ?></td>
      <td><?php echo $row['sucursal'] ?></td>
    
    </tr>
  
   
    
   <?php }} ?>
  </tbody>
</table>
                      
</div>














  <?php } ?>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
   <!-- (Optional) Latest compiled and minified JavaScript translation files -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                      <script src="js/jquery.nicescroll.min.js"></script>
                      
                      <script>
                         $(document).ready(function() {
                         $(".do-nicescrol").niceScroll({
                         
                         cursorcolor:"#4f0423",
                         cursorwidth:"1px",
                         background:"rgba(20,20,20,0.3)",
                         cursorborder:"1px solid #4f0423",
                         cursorborderradius:0
                         });  // a world full of color! 
                         });  
                      </script>

   <script>
      $(document).ready(function() {
          $("#cerrar").click(function() {
              $(".cerrar_login").hide();
          });
          $("#abrir").click(function() {
              $("#perfil").toggle();
          });
          $("#abrir_menu").click(function() {
              $("#menu_open").toggle();
      
          });
      
      });
   </script>
   <script>


                   
<script>
$(document).ready(function() {

   $.ajax({
type: "POST",
url: "municipiso.php",
data: { pais : "Pais" } 
}).done(function(data){
$("#pais").html(data);
});





   $.ajax({
type: "POST",
url: "municipiso.php",
data: { estados : "Mexico" } 
}).done(function(data){
$("#jmr_contacto_estado").html(data);
});
// Obtener municipios
$("#jmr_contacto_estado").change(function(){
var estado = $("#jmr_contacto_estado option:selected").val();
$.ajax({
type: "POST",
url: "municipiso.php",
data: { municipios : estado } 
}).done(function(data){
$("#jmr_contacto_municipio").html(data);
});
});

});
</script>


   </script>
</body>
</html>