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
                      <style>
                      #hover-effect2:hover:before{

                        color:#37474f ;
                        }
                      </style>
                   <?php include 'php/header-admin.php';?>
                   <body class="do-nicescrol">
                      <div style="background:#6d7fcc; width:100%; height:auto;">
                         <div class="container-fluid">
                            <div class="row">
                               <div class="col-md-6">
                                <p style="text-align:center;">
                                <i class="fab fa-cpanel" style="font-size:70px; color:#fff;position:relative;top:4px;"></i>
           
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
                     <a href="php/cerrarsesion.php" class="btn btn-light" style="color:#2e2e2e;"> Salir</a>
                     <p id="cerrar" class="btn "> Cerrar</p>
                  </div>
               </div>
            </div>
                                    </div>
                                 </div>
                            </div>
                         </div>
                     

                     <?php } if($roles=="Administrador"){ ?>
                    <div style="" class="imagen_inicio">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12" style="margin-top:150px;">
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=empleados" > <i class="fa fa-users" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Empleados</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=tareas" > <i class="far fa-id-card" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Roles / Tareas</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>

                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=turno" > <i class="glyphicon glyphicon-time" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Turnos</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=capacitacion" > <i class="fas fa-chalkboard-teacher" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Capacitacion</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>
                            
                                 <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=orden" > <i class="fas fa-utensils" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Orden de Mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=cuenta" > <i class="fas fa-money-check-alt" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;"> Cuenta por mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=pedido" > <i class="fas fa-motorcycle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Pedido a Domicilio</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=proveedor" > <i class="fas fa-truck" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    
                                     <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Proveedor</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>
                            
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=inventario" > <i class="glyphicon glyphicon-list-alt" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Inventarios</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=estadisticas" > <i class="fas fa-chart-line" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Estadisticas</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=fechas" > <i class="glyphicon glyphicon-calendar" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Fechas Importantes</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=ayuda" > <i class="fa fa-info-circle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Ayuda</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:730px;"></p>
                              </div>   
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <!-- <div style="">
                    
                     <div class="container">
                     <div class="row">
                     <div class="col-md-12">
                    
                     <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=empleados" > <i class="fa fa-users" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Empleados</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=tareas" > <i class="far fa-id-card" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Roles / Tareas</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>

                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=turno" > <i class="glyphicon glyphicon-time" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Turnos</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=capacitacion" > <i class="fas fa-chalkboard-teacher" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Capacitacion</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>
                            
                                 <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=orden" > <i class="fas fa-utensils" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Orden de Mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-money-check-alt" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;"> Cuenta por mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-motorcycle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Pedido a Domicilio</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-truck" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Proveedor</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>
                            
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="glyphicon glyphicon-list-alt" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Inventarios</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-chart-line" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Estadisticas</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="glyphicon glyphicon-calendar" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Fechas Importantes</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fa fa-info-circle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Ayuda</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:730px;"></p>
                              </div>    
                     
                     </div>
                     </div>
                     </div>
                     </div>-->
                    
                     <?php }if($roles=="Mesero"){?>
                        <div  style="background:#fff; width:100%; height:10px;">
                     <div class="container">
                        <div class="row">
                        <div class="col-md-3">
                        <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=tareas" > <i class="far fa-id-card" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Roles / Tareas</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=turno" > <i class="glyphicon glyphicon-time" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>

                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=capacitacion" > <i class="fas fa-chalkboard-teacher" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Capacitacion</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=orden" > <i class="fas fa-utensils" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Orden por Mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>
                            
                                 <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-money-check-alt" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;"> Cuenta por Mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="glyphicon glyphicon-calendar" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Fechas Importantes</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fa fa-info-circle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Ayuda</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-question-circle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Pendiente</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>                    
                        </div>
                     </div>
                     </div>

                     <?php }if($roles=="Cocinero"){?>
                        <div  style="background:#fff; width:100%; height:10px;">
                     <div class="container">
                        <div class="row">
                        <div class="col-md-3">
                        <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=tareas" > <i class="far fa-id-card" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Roles / Tareas</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=turno" > <i class="glyphicon glyphicon-time" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Turno</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>

                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=capacitacion" > <i class="fas fa-chalkboard-teacher" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Capacitacion</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="menu.php?opcion=orden" > <i class="fas fa-utensils" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Orden por Mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>
                            
                                 <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-money-check-alt" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;"> Cuenta por Mesa</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="glyphicon glyphicon-calendar" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Fechas Importantes</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                              <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fa fa-info-circle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">Ayuda</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:30px;"></p>
                              </div>
                              <div class="col-md-3">
                                 <div style="background:#6d7fcc;width:100%;height:140px;">
                                     <p style="text-align:center;">
                                     <a href="#empleados" > <i class="fas fa-question-circle" id="hover-effect2" style="font-size:55px; color:#fff;position:relative;top:30px;"></i> </a>
                                    <p style="color:#fff;text-align:center;position:relative;top:30px;font-size:19px;">jajajaja</p>
                                     </p>
                                 </div>
                                 <p style="margin-top:50px;"></p>
                              
                              </div>                    
                        </div>
                     </div>
                     </div>

                     <?php }?>
                      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
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
    
</body>
</html>