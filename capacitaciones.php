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
   $rolcapacacitacion=$_REQUEST['rol'];
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
               <span ><a href="menu.php?opcion=capacitacion" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  <?php echo $rolcapacacitacion; ?>
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

  <?php if($rolcapacacitacion=='mesero'){ ?>
   <div class="imagen_meseros">
      <div class="container">
         <div class="row">
            
            <div class="col-md-3">

            </div>
             <div class="col-md-6" style="">
             
             <p style="font-size:65px;font-weight:600;color:#fff;text-align:center;margin-top:200px;">Capacitaciones</p>
             
            <p style="background:#6d7fcc; width:50%;height:50px; margin:0 auto;  text-align:center;font-size:23px; font-weight:600;margin-top:100px;"><span style="color:#fff;position:relative;top:7px;">Meseros</span></p>
             
            </div>
            <div class="col-md-3">
           
           
            </div>
          
         </div>
      </div>
   </div>
<div>

    <div class="container">
       <div class="row">
          <div class="col-md-12">
          <?php
                  require 'php/config.php';
                  
                       $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Mesero' and capacitacion1 = 1 ";
                       $result = $con->query($sql);
                  
                      
                            // obtine los valores por medio del id de las columnas de la tabla 
                            while($row = $result->fetch_assoc()) {
                              // 
                  ?>
      
               

          <ul class="nav nav-tabs"  role="tablist" style="margin-top:30px;">
  <li class="nav-item">

    <a class="nav-link" id="uno" data-toggle="pill" href="" role="tab" aria-controls="uno" aria-selected="true">Capacitacion 1</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" id="dos" data-toggle="pill" href="" role="tab" aria-controls="dos" aria-selected="false">Capacitacion 2 </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tres" data-toggle="pill" href="" role="tab" aria-controls="tres" aria-selected="false">Capacitacion 3 </a>
  </li>
</ul>
<div id="efecto1" style="margin-top:50px;"> 
  <div class="container">
     <div class="row">
      
        <div class="col-md-12">
        <p style="text-align:center; font-size:30px; color:#2e2e2e;"><?php echo $row['nombrecapacitacion']?></p>
        </div>
        <div class="col-md-12">
           <div style="margin-top:25px;background:#6d7fcc; width:25%; height:50px;border-radius:50px;">
                  
         <p style="color:#fff;position:relative;top:5px;left:25px;font-size:25px;font-weight:600;">Paso 1</p>
         
      </div>
      <p style="text-align:right;margin-top:55px; ">
            <?php echo $row['descripcion']?>

        
       
         </p>
         
         <div style="margin-top:25px;background:#6d7fcc; float:right;width:25%; height:50px;border-radius:50px;">
         <p style="color:#fff;position:relative;top:5px;left:25px;font-size:25px;font-weight:600;">Paso 2</p>
         </div>


        </div>

         <div class="col-md-12">
         
         <p style="margin-top:55px; text-align:left;">
            <?php echo $row['descripcion']?>

        
       
         </p>
         </div>





        
        <div class="col-md-12" style="margin-top:100px;">
        <p style="text-align:center;">
           <iframe width="100%" height="475" src="<?php echo $row['video1']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </p>
       
                     <p style="margin-top:150px;"></p>
        </div>
     </div>
  </div>


</div>

<?php } ?>

<?php
                     require 'php/config.php';
                     
                          $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Mesero' and capacitacion2 = 2 ";
                          $result = $con->query($sql);
                     
                         
                               // obtine los valores por medio del id de las columnas de la tabla 
                               while($row = $result->fetch_assoc()) {
                                 // 
                     ?>
<div id="efecto2" style="display:none; margin-top:50px;">
<div class="container">
   <div class="row">
      
      <div class="col-md-12">
        <p style="text-align:center; font-size:30px; color:#2e2e2e;"><?php echo $row['nombrecapacitacion']?></p>
      </div>
        <div class="col-md-12">
           <div style="margin-top:25px;background:#6d7fcc; width:25%; height:50px;border-radius:50px;">
         <p style="color:#fff;position:relative;top:5px;left:25px;font-size:25px;font-weight:600;">Paso 1</p>
         
         </div>
                  
         <p style="text-align:justify;margin-top:55px; ">
            <?php echo $row['descripcion']?>

        
       
         </p>
      </div>
      
         
        


      

         <div class="col-md-12">
         <div style="margin-top:25px;background:#6d7fcc; float:right;width:25%; height:50px;border-radius:50px;">
         <p style="color:#fff;position:relative;top:5px;left:25px;font-size:25px;font-weight:600;">Paso 2</p>
         </div>
         <p style="margin-top:155px; text-align:left;">
            <?php echo $row['descripcion']?>

        
       
         </p>
         <p style="text-align:center;margin-top:50px;">
                                 <iframe width="95%" height="415" src="<?php echo $row['video2']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                                 </p>
                                 <p style="margin-top:250px;"></p>
         </div>
                                 
                     
                   
      </div>
   </div>
</div>


                               <?php } ?>
                               <?php
                     require 'php/config.php';
                     
                          $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Mesero' and capacitacion3 = 3 ";
                          $result = $con->query($sql);
                     
                         
                               // obtine los valores por medio del id de las columnas de la tabla 
                               while($row = $result->fetch_assoc()) {
                                 // 
                     ?>
<div id="efecto3" style="display:none; margin-top:50px;"> 

<div class="container">
   <div class="row">
      <div class="col-md-12">
      <p><?php echo $row['nombrecapacitacion']?></p>
                     <p><?php echo $row['descripcion']?></p>
                     <p><img src="<?php echo $row['img']?>" style="width:30%;height:auto;" alt=""></p>
                     <p>Descripcion</p>
                     <iframe width="100%" height="615" src="<?php echo $row['video3']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p style="margin-top:150px;"></p>
      </div>
   </div>
</div>

</div>
                               <?php } ?>



          </div>
       </div>
    </div>
</div>

  <?php } if($rolcapacacitacion=='chef'){ ?>


<div> 
   
<div class="container">
   <div class="row">
      <div class="col-md-12">
      <?php
                  require 'php/config.php';
                  
                       $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Chef' and capacitacion1 = 1 ";
                       $result = $con->query($sql);
                  
                      
                            // obtine los valores por medio del id de las columnas de la tabla 
                            while($row = $result->fetch_assoc()) {
                              // 
                  ?>
          <p style="text-align:center;font-size:29px; margin-top:100px;">Sección de Capacitaciones</p>
          <p style="text-align:center;font-size:25px; margin-top:10px;">Chef</p>
               

          <ul class="nav nav-tabs"  role="tablist" style="margin-top:80px;">
  <li class="nav-item">

    <a class="nav-link" id="uno" data-toggle="pill" href="" role="tab" aria-controls="uno" aria-selected="true">Capacitacion 1</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" id="dos" data-toggle="pill" href="" role="tab" aria-controls="dos" aria-selected="false">Capacitacion 2 </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tres" data-toggle="pill" href="" role="tab" aria-controls="tres" aria-selected="false">Capacitacion 3 </a>
  </li>
</ul>
<div id="efecto1" style="margin-top:50px;"> 

<div class="container">
   <div class="row">
      <div class="col-md-12">
      <p><?php echo $row['nombrecapacitacion']?></p>
                     <p><?php echo $row['descripcion']?></p>
                     <p><img src="<?php echo $row['img']?>" style="width:30%;height:auto;" alt=""></p>
                     <p>Descripcion</p>
                     <iframe width="100%" height="615" src="<?php echo $row['video1']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p style="margin-top:150px;"></p>
      </div>
   </div>
</div>

</div>

                            <?php } ?>


                            <?php
                     require 'php/config.php';
                     
                          $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Chef' and capacitacion2 = 2 ";
                          $result = $con->query($sql);
                     
                         
                               // obtine los valores por medio del id de las columnas de la tabla 
                               while($row = $result->fetch_assoc()) {
                                 // 
                     ?>
<div id="efecto2" style="display:none; margin-top:50px;">
<div class="container">
   <div class="row">
      <div class="col-md-12">
      <p><?php echo $row['nombrecapacitacion']?></p>
                     <p><?php echo $row['descripcion']?></p>
                     <p><img src="<?php echo $row['img']?>" style="width:30%;height:auto;" alt=""></p>
                     <p>Descripcion</p>
                     <iframe width="100%" height="615" src="<?php echo $row['video2']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p style="margin-top:150px;"></p>
      </div>
   </div>
</div>

</div>

                            <?php } ?>

                            <?php
                     require 'php/config.php';
                     
                          $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Chef' and capacitacion3 = 3 ";
                          $result = $con->query($sql);
                     
                         
                               // obtine los valores por medio del id de las columnas de la tabla 
                               while($row = $result->fetch_assoc()) {
                                 // 
                     ?>
<div id="efecto3" style="display:none; margin-top:50px;"> 

<div class="container">
   <div class="row">
      <div class="col-md-12">
      <p><?php echo $row['nombrecapacitacion']?></p>
                     <p><?php echo $row['descripcion']?></p>
                     <p><img src="<?php echo $row['img']?>" style="width:30%;height:auto;" alt=""></p>
                     <p>Descripcion</p>
                     <iframe width="100%" height="615" src="<?php echo $row['video3']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p style="margin-top:150px;"></p>
      </div>
   </div>
</div>

</div>


                               <?php } ?>




      </div>
   </div>
</div>

</div>



  <?php } if($rolcapacacitacion=='cocinero'){ ?>




<div>aparatdo para cocinero</div>
  <?php } if($rolcapacacitacion=='parillero'){ ?>

<div>apartado para parillero</div>
  <?php } if($rolcapacacitacion=='administrador'){ ?>
<div>

   administrador
</div>
  <?php } if($rolcapacacitacion=='gerente'){ ?>

   <div>
      aparatdo de gerente
   </div>

  <?php }  if($rolcapacacitacion=='recepcionista'){ ?>
   <div>recepcionista</div>

  <?php } if($rolcapacacitacion=='lavar'){ ?>
   <div>
      lava loza
   </div>
  <?php } if($rolcapacacitacion=='cajero'){ ?>
   <div>cajero</div>
  <?php } if($rolcapacacitacion=='limpieza'){?>
   <div>limepiaza</div>
  <?php } if($rolcapacacitacion=='capacitacion'){ ?>
   <div>capacitacion</div>
  <?php } ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
      $(document).ready(function() {
         $("#uno").click(function(){
               $("#efecto1").fadeToggle();
           });
           $("#dos").click(function(){
               $("#efecto2").fadeToggle();
           });

           $("#dos").click(function(){
               $("#efecto1").hide();
           });
           $("#uno").click(function(){
               $("#efecto2").hide();
           });


           $("#tres").click(function(){
               $("#efecto3").fadeToggle();
           });


           $("#tres").click(function(){
               $("#efecto1").hide();
           });

           $("#uno").click(function(){
               $("#efecto3").hide();
           });
          

           $("#tres").click(function(){
               $("#efecto2").hide();
           });
           $("#dos").click(function(){
               $("#efecto3").hide();
           });

         
           
      
      });
   </script>
   <script>
     
   </script>
</body>
</html>