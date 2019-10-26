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
   $orden=$_REQUEST['ordenes'];
  
   ?>
<body class="do-nicescrol">
  
  <?php if($orden=='menu1'){ ?>
  
 <div style="background:#6d4c41; width:100%; height:auto;">
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
               <span ><a href="menu.php?opcion=orden" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  <?php echo $orden; ?>
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
<div>
<div class="container">
<div class="row">
<div class="col-md-12">
<p style="text-align:center; margin-top:60px;">
<img src="img/platillos/1.jpg" style="width:50%;height:auto;" alt="">

</p>

</div>
<div class="col-md-6">
<div style="background:#6d4c41; width;100%; height:65px;">
<p style="text-align:center; color:#fff;font-size:30px; font-weight:600; position:relative;top:12px;">Huevos estrellados</p>

</div>

</div>
<div class="col-md-6">
<div style="background:#ff6d00; width;100%; height:65px;">
<p style="text-align:center; font-size:30px; font-weight:600; position:relative;top:12px;"><a href="#" data-toggle="modal" data-target="#myModal" style="color:#fff;"> Pedir Orden</a></p>                                                                          
</div>
</div>
</div>
</div>

<div class="container">
  
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title" style="text-aling:center;">Datos de la orden</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <form action="">
         <input type="text" class="form-control " name="cliente" id="nombre_cliente" placeholder="Nombre del Cliente" value="" required>
                 <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                    Campo Obligatorio
                 </p>
                 <input type="text" class="form-control is-valid" name="orden" id="orden" placeholder="" value="<?php echo $orden ?>" required style="width:38%;">
                 <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                   
                 </p>
         <select class="custom-select " style="width:60%; float:right;position:relative;top:-54px;">
                     <option selected>N° de Mesa</option>
                     <option value="1">Mesa 1</option>
                     <option value="2">Mesa 2</option>
                     <option value="3">Mesa 3</option>
                     <option value="4">Mesa 4</option>
                     <option value="5">Mesa 5</option>
                     <option value="6">Mesa 6</option>
                     <option value="7">Mesa 7</option>
                     <option value="8">Mesa 8</option>
                     <option value="9">Mesa 9</option>
                   
                  </select>
                 <div style="width:50%; position:relative;top:-30px;">
                 <input type="text" class="form-control " name="precio" id="precio" placeholder="" value="<?php //echo $orden ?> $ 0.00 " required >
                 <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                    Campo Obligatorio
                 </p>
                 </div>
                  

                 
                 <div style="float:right;width:40%; position:relative;top:-110px;">
                 <input type="number" class="form-control " name="cantidad_orden" id="cantida_orden" min="1" placeholder="" value="<?php //echo $orden ?>" required >
                 <p style="font-size:14px;margin-left:15px;margin-top:5px;color:rgb(218, 30, 30);">
                    Campo Obligatorio
                 </p>
                 </div>
               

                 <div class="modal-footer" style="width:100%;position:relative;top:-80px;">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Ingresar Orden</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                 </div>
                 
         </form> 
        
        </div>
        <p style="margin-top:-80px;"></p>
        
        
        
      </div>
      
    </div>
  </div>
  
</div>










<div style="background:#ef5350;width:100%; height:auto;">
<div class="container">
<div class="row">
<div class="col-md-4">
<p style="color:#fff;margin-top:50px;font-size:30px;font-weight:600;">Ingredientes</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
</div>

<div class="col-md-4">
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
<p style="margin-top:35px;">
<i class="fa fa-check-circle" style="color:#fff; font-size:30px;" aria-hidden="true"></i>
 <span style="color:#fff; font-weight:600; position:relative;left:15px;top:-4px;font-size:20px;">
  Huevos Revueltos
 
 </span>
</p>
</div>
<div class="col-md-4">
<div style="margin-top:-30px">
<p style="color:#fff;text-align:center;position:relative;top:165px; font-weight:600;font-size:30px;"> Precio</p>
<p style="color:#fff; text-align:center;position:relative;top:155px;font-size:23px;font-weight:800;">$ 250.00 MXN</p>

<p style="text-align:center;">
<img src="img/platillos/7.png" style="width:65%;text-align:center;"alt="">

</p> 

</div>

<p style="margin-top:150px;"></p>
</div>
</div>
</div>
</div>






  <?php } if($orden=='menu2'){ ?>
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
               <span ><a href="menu.php?opcion=orden" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  <?php echo $orden; ?>
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

  
  
  
  
  
  
  
  
  
  
  
   

                        
  <?php } if($orden=='menu3'){ ?>
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
               <span ><a href="menu.php?opcion=orden" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  <?php echo $orden; ?>
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

   

  <?php } if($orden=='menu4'){ ?>
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
               <span ><a href="menu.php?opcion=orden" style="font-weight:800;font-size:18px; color:#fff;margin-left:10px; text-decoration:none;"> Seccion anterior  </a></span>
                  <a href="" style="color:#fff; text-decoration: none;"> <i class="fa fa-users" style="font-size:20px; color:#fff;margin-left:25px;"></i>
                  <span style="font-size: 17px; position:relative;left:5px;top:-1px;font-weight:800;">
                  <?php echo $orden; ?>
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


   
  
    
   <?php } ?>
  </tbody>
</table>
                      
</div>














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