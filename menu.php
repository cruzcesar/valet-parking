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
   $opcion_menu=$_REQUEST['opcion'];
  
  
   /*$tareas=$_GET['dos'];*/
   ?>
   <style>
                      #hover-effect2:hover:before{

                        color:#37474f ;
                        }
                      </style>
<body class="do-nicescrol">
   <div style="background:#6d4c41; width:100%; height:auto;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
            <p>
               <ul>
               <li style="display:inline-block;">
                  <a href="admin.php" style="color:#fff; text-decoration: none;"> <i class="fa fa-home" style="font-size:25px; color:#fff;"></i>
                  <span style="font-size: 18px; font-weight:800; position:relative;left:15px;">
                   Ir al Panel
                  </span>    
                  </a>
               </li>
               <li style="display:inline-block; margin-left:50px;">
                  <a href="" style="color:#fff; text-decoration: none;"> 
                  
                  <span style="font-weight:800;font-size:18px;"> Seccion </span>
                  <i class="fas fa-grip-vertical" style="font-size:16px; position:relative;top:1px;left:2px;color:#fff;"></i>
                  <!--<i class="fas fa-ellipsis-v" style="font-size:45px; position:relative;top:10px;color:#fff;"></i>-->
                        <span style="font-weight:800;position:relative;left:5px;top:-1px;">
                        <?php echo $opcion_menu; ?>
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
                  <a href="javascript:MyFunction();" id="abrir" style="">
                  <?php echo $sesion->get("email"); ?>
                  </a>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
               </p>
               <div class="cerrar_login" id="perfil">
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
  
   <?php if( $opcion_menu=='empleados'){ ?>
  <div  class="imagen_inicio">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
  <div class="col-md-3">
                  <div style="background:#20beda;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="registro_empleados.php" > <i class="fa fa-user-check" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Alta de Empleado</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                  </div>
                  <div class="col-md-3">
                  <div style="background:#8049da;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empleados.php?operaciones=editar_empleado" > <i class="fa fa-user-edit" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Editar Empleado</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                  </div>
                  <div class="col-md-3">
                  <div style="background:#d12a0d;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empleados.php?operaciones=baja_empleado" > <i class="fa fa-user-times" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Baja de Empleado</p>
                                     </p>
                                 </div>

                                 <p style="margin-top:30px;"></p>
                  
                  </div>
                  <div class="col-md-3">

                  <div style="background:#15ad7b;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="empleados.php?operaciones=numero_empleado" > <i class="fa fa-user-cog" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Asignacion N° Empleado</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                  </div>


  </div>
  </div>
  </div>
   <?php } if( $opcion_menu=='tareas'){ ?>
    <div class="imagen_inicio">
      <div class="container">
         <div class="row">
         <div class="col-md-12">
     <p style="margin-top:180px;"> </p>
  </div>
            <div class="col-md-3">
            <div style="background:#6d7fcc ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=mesero" > <img src="img/m.png" style="width:37%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-23px;font-size:19px;">Tareas / Mesero</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#20beda;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=chef" > <img src="img/che.png" style="width:28%; height:auto; margin-top:23px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-5px;font-size:19px;">Tareas / Chef</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#607d8b;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=cocinero" > <img src="img/cooker.png" style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Tareas / Cocineros</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#00695c ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=parillero" > <img src="img/parrillero.png" style="width:35%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-19px;font-size:19px;">Tareas / Parrillero</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            

            <div class="col-md-3">
            <div style="background:#546e7a;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=parillero" > <img src="img/admi.png" style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Tareas / Gerente</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#455a64 ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=chef" > <img src="img/gerente.png" style="width:38%; height:auto; margin-top:13px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Tareas / Administrador </p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
           
            <div style="background:#039be5   ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=chef" > <img src="img/recepcionist.png" style="width:38%; height:auto; margin-top:13px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Tareas / Recepcionista </p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>

            
            <div class="col-md-3">
            <div style="background:#795548;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=chef" > <img src="img/loza.png" style="width:28%; height:auto; margin-top:23px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-5px;font-size:19px;">Tareas / Lava Loza</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>

            <div class="col-md-3">
            <div style="background:#880e4f;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=chef" > <img src="img/caja.png" style="width:28%; height:auto; margin-top:23px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-5px;font-size:19px;">Tareas / Cajero (a) </p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            
            <div class="col-md-3">
           
            <div style="background:#00897b ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="roles.php?tareas=chef" > <img src="img/limpieza.png" style="width:38%; height:auto; margin-top:13px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Tareas / Limpieza </p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            
         </div>
      </div>

    </div>


    <?php } if( $opcion_menu=='turno'){ ?>

        <div class="imagen_inicio">
         <div class="container">
            <div class="row">
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
               <div class="col-md-3">
               <div style="background:#ef5350;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="turno.php?turnos=primero" > <img src="img/tur1.png"  style="width:45%; height:auto; margin-top:5px;" alt=""></a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#ef5350  ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="turno.php?turnos=segundo" > <img src="img/turno_2.png"  style="width:45%; height:auto; margin-top:7px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#ef5350 ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="turno.php?turnos=tercero" > <img src="img/turno_3.png"  style="width:45%; height:auto; margin-top:7px;" alt="">  </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               <div class="col-md-3">
               <div style="background:#ef5350  ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="turno.php?turnos=cambiar" > <i class="fas fa-cog" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Cambiar Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
               </div>
               
            </div>
         </div>

        </div>
        
   <?php } if( $opcion_menu=='capacitacion'){?>

      <div class="imagen_inicio">
         <div class="container">
            <div class="row">
            <div class="col-md-12">
     <p style="margin-top:200px;"> </p>
  </div>
            <div class="col-md-3">
            <div style="background:#880e4f ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=mesero" > <img src="img/m.png" style="width:37%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-20px;font-size:19px;"> Mesero</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#20beda;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=chef" > <img src="img/che.png" style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;"> Chef</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#607d8b;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=cocinero" > <img src="img/cooker.png" style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;"> Cocinero</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#00695c ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=parillero" > <img src="img/parrillero.png" style="width:35%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Tareas / Parillero</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#00695c ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=administrador" > <img src="img/admi.png"  style="width:35%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;">Administrador</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>

            <div class="col-md-3">
            <div style="background:#607d8b;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=gerente" > <img src="img/gerente.png" style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;"> Gerente</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>

            <div class="col-md-3">
            <div style="background:#20beda;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=recepcionista" > <img src="img/recepcionist.png" style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;"> Recepcionista</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#880e4f ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=lavar" > <img src="img/loza.png" style="width:37%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-18px;font-size:19px;"> Lava Loza</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#880e4f ;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=cajero" > <img src="img/caja.png" style="width:37%; height:auto;margin-top:17px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-17px;font-size:19px;"> Cajero (a) </p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#20beda;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=limpieza" > <img src="img/limpieza.png"  style="width:35%; height:auto; margin-top:18px;" alt=""> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:-15px;font-size:19px;"> Personal de Limpieza</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            <div class="col-md-3">
            <div style="background:#607d8b;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="capacitaciones.php?rol=capacitacion" >  <i class="fas fa-chalkboard-teacher" id="hover-effect2" style="font-size:68px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:15px;font-size:19px;"> Agregar una Capacitacion</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
            </div>
            </div>
         </div>
      </div>



   <?php } if( $opcion_menu=='orden'){ ?>

<div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:40px;"> </p>
  </div>
      <div class="col-md-3">
       <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu1" style="text-decoration:none; font-weight:600;">
       Menu 1
       </a> 
       
       </p>
       
       </div>
       <p style="margin-top:50px;"></p>
      </div>
      <div class="col-md-3" >
     
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       
       
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu2" style="text-decoration:none; font-weight:600;">
       Menu 2
       </a> 
       
       </p>


       </div>

       <p style="margin-top:50px;"></p>
       
      </div>
      <div class="col-md-3">
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu3" style="text-decoration:none; font-weight:600;">
       Menu 3
       </a> 
       
       </p>
       </div>

       <p style="margin-top:50px;"></p>
      </div>
      <div class="col-md-3">

     <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
      
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu4" style="text-decoration:none; font-weight:600;">
       Menu 4
       </a> 
       
       </p>

       </div>

       <p style="margin-top:50px;"></p>
      </div>
      <div class="col-md-3">
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu5" style="text-decoration:none; font-weight:600;">
       Menu 5
       </a> 
       
       </p>



       </div>

       <p style="margin-top:50px;"></p>
      </div>
      <div class="col-md-3">
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu6" style="text-decoration:none; font-weight:600;">
       Menu 6
       </a> 
       
       </p>



       </div>

       <p style="margin-top:50px;"></p>
      </div>
      <div class="col-md-3">
      
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu7" style="text-decoration:none; font-weight:600;">
       Menu 7
       </a> 
       
       </p>


       </div>

       <p style="margin-top:50px;"></p>
      </div>

      <div class="col-md-3">
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu8" style="text-decoration:none; font-weight:600;">
       Menu 8
       </a> 
       
       </p>



       </div>

       <p style="margin-top:50px;"></p>
      </div>


      <div class="col-md-3">
      
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
      
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu9" style="text-decoration:none; font-weight:600;">
       Menu 9
       </a> 
       
       </p>



       </div>

       <p style="margin-top:50px;"></p>
      </div>

      <div class="col-md-3">
      
      <div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu10" style="text-decoration:none; font-weight:600;">
       Menu 10
       </a> 
       
       </p>


       </div>

       <p style="margin-top:50px;"></p>
      </div>

<div class="col-md-3">

<div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
       
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu11" style="text-decoration:none; font-weight:600;">
       Menu 11
       </a> 
       
       </p>


       </div>

       <p style="margin-top:50px;"></p>
</div>


<div class="col-md-3">

<div  style="background:#fff;width:100; height:180px;">
       <p style="text-align:center;position:relative;top:30px;">
      <img src="img/platillos/1.jpg"  style="width:50%; height:auto;" alt="">
       
       </p>
      
       <p style="text-align:center;font-size:20px;margin-top:35px;">
       <a href="platillos.php?ordenes=menu12" style="text-decoration:none; font-weight:600;">
       Menu 12
       </a> 
       
       </p>



       </div>

       <p style="margin-top:50px;"></p>
</div>



   </div>
</div>

</div>

   <?php } if( $opcion_menu=='cuenta'){ ?>
    
      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
         cuenta por mesa
      </div>
   </div>
</div>

</div>
   <?php } if( $opcion_menu=='pedido'){  ?>
      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
        pedido a domicilio
      </div>
   </div>
</div>

</div>

   <?php }  if( $opcion_menu=='proveedor'){ ?>

      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
        pedido al proveedor
      </div>
   </div>
</div>

</div>
   <?php } if( $opcion_menu=='inventario'){ ?>

      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
        seccion de Inventarios
      </div>
   </div>
</div>

</div>

   <?php } if( $opcion_menu=='estadisticas'){ ?>
      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
        Estadisticas dem mes
      </div>
   </div>
</div>

</div>

   <?php } if( $opcion_menu=='fechas'){  ?>

      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
        Fechas importantes del año
      </div>
   </div>
</div>

</div>

   <?php } if( $opcion_menu=='ayuda'){  ?>
      <div class="imagen_inicio">
<div class="container">
   <div class="row">
   
            <div class="col-md-12">
     <p style="margin-top:240px;"> </p>
  </div>
      <div class="col-md-3">
        seccion de ayuda
      </div>
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