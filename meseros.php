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
   <div style="margin-top:80px;">
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
               <p style="text-align:center;font-size:23px;">Cursos y Capacitaciones</p>
               <nav style="margin-top:80px;">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                     <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Capacitacion 1</a>
                     <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Capacitacion 2</a>
                     <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Capacitacion 3
                     </a>
                  </div>
               </nav>
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <p style="margin-top:50px;"></p>
                     <p><?php echo $row['nombrecapacitacion']?></p>
                     <p><?php echo $row['descripcion']?></p>
                     <p><img src="<?php echo $row['img']?>" style="width:30%;height:auto;" alt=""></p>
                     <p>Descripcion</p>
                     <iframe width="100%" height="615" src="<?php echo $row['video1']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p style="margin-top:150px;"></p>
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
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <p style="margin-top:50px;"></p>
                     <p><?php echo $row['nombrecapacitacion']?></p>
                     <p><?php echo $row['descripcion']?></p>
                     <p><img src="<?php echo $row['img']?>" style="width:30%;height:auto;" alt=""></p>
                     <p>Descripcion</p>
                     <iframe width="100%" height="615" src="<?php echo $row['video1']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p style="margin-top:150px;"></p>
                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <?php } ?> 
                     <?php
                        require 'php/config.php';
                        
                             $sql = "SELECT id, nombrecapacitacion,descripcion,img,video1,video2,video3 FROM capacitacion WHERE roles = 'Mesero' and capacitacion3 = 3 ";
                             $result = $con->query($sql);
                        
                            
                                  // obtine los valores por medio del id de las columnas de la tabla 
                                  while($row = $result->fetch_assoc()) {
                                    // 
                        ?>
                     <p style="margin-top:50px;"></p>
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
      </div>
   </div>
   <?php } ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
   <script></script>
   <script>
      $(function () {
        $('#myTab a[href="#profile"]').tab('show') // Select tab by name
      $('#myTab li:first-child a').tab('show') // Select first tab
      $('#myTab li:last-child a').tab('show') // Select last tab
      $('#myTab li:nth-child(3) a').tab('show') // Select third tab
      })
   </script>
</body>
</html>