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
   $turnos=$_REQUEST['turnos'];
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
               <span ><a href="menu.php?opcion=turno" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  <?php echo $turnos; ?>
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

  <?php if($turnos=='primero'){ ?>
   <div class="imagen_inicio">
    <div class="container">
       <div class="row">
       <div class="col-md-12">
     <p style="margin-top:180px;"> </p>
  </div>

  lista de todos los trabajdores de mi rstuirabnte del primer turno
       </div>
    </div>
</div>

  <?php } if($turnos=='segundo'){ ?>
   <div class="imagen_inicio">
    <div class="container">
       <div class="row">
       <div class="col-md-12">
     <p style="margin-top:180px;"> </p>
  </div>

  lista de todos los trabajdores de mi rstuirabnte del segundo turno
       </div>
    </div>
</div>



  <?php } if($turnos=='tercero'){ ?>

   <div class="imagen_inicio">
    <div class="container">
       <div class="row">
       <div class="col-md-12">
     <p style="margin-top:180px;"> </p>
  </div>

  lista de todos los trabajdores de mi rstuirabnte del tercer turno
       </div>
    </div>
</div>


<div>aparatdo para tercero</div>
  <?php } if($turnos=='cambiar'){ ?>

   <div class="imagen_inicio">
    <div class="container">
       <div class="row">
       <div class="col-md-12">
     <p style="margin-top:180px;"> </p>
  </div>
  lista de todos los trabajdores de mi rstuirabnte cambiar turno
       </div>
    </div>
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
</body>
</html>