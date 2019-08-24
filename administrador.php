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
   	header("Location: sesion.php");		
   }
   
   else 
   {
   $email=$_SESSION['email'];
   ?>
<?php include 'php/header-admin.php';?>
<body class="do-nicescrol">
   <div style="background:#6d7fcc; width:100%; height:60px;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <i class="fa fa-bars" style="font-size:25px; color:#fff; margin-left:25px;margin-top:10px;" id="sidebarCollapse"></i>
            </div>
            <div class="col-md-6">
               <p style="text-align:right;"><a href="" style="color:#fff; font-size:14px; position:relative;top:15px;"><?php echo $email?> <i class="glyphicon glyphicon-triangle-bottom" style="position:relative;top:3px;"></i></a></p>
            </div>
         </div>
      </div>
   </div>
   <nav id="sidebar">
      <div class="sidebar-header">
         <p style="text-align:center; margin-top:50px;">
            <img src="<?php echo $foto; ?>" style="z-index: 5;height: 90px;width: 90px;border: 3px solid;border-color: transparent;border-color: rgba(255, 255, 255, 0.2);border-radius: 50%;">
         </p>
         <h4 style="text-align:center;  margin-top:25px;"><?php echo $roles; ?></h4>
         <h6 style="text-align:center; margin-top:25px;"><?php echo $nombre; ?></h6>
         <p style="text-align:center;"><a href="php/cerrarsesion.php" class="btn btn-light" style="color:#fff;"> Salir</a></p>
      </div>
      <?php if($roles=="Administrador"){ ?>
      <ul class="list-unstyled ">
         <p style="text-align:center;font-weight:600;">Menu de Operaciones</p>
         <li class="" style="margin-top:50px;">
            <a href="#empleados" data-toggle="collapse" aria-expanded="false">  <i class="fa fa-users" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Empleados </span></a>
            <ul class="collapse list-unstyled" id="empleados" style="">
               <li><a href="registro.php"><span style="position:relative;left:25px;font-weight:600;">Alta de Empleados </span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;">Editar Empleados</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;">Baja de Empleados</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#roles" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-list-alt" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Roles / Tareas </span></a>
            <ul class="collapse list-unstyled" id="roles" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Meseros </span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Cocineros</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Chef</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Cajero</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Ayudante de Cocina</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Ayudante de Parilla</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Administrador</span></a></li>
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Gerente</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#calendario" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-calendar" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Calendario </span></a>
            <ul class="collapse list-unstyled" id="calendario" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Definir </span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Definir</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#turno" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-time" style="font-size:25px;"></i> <span style="position:relative;left:28px;top:-2px; font-weight:600; font-size:18px;"> Turnos  </span></a>
            <ul class="collapse list-unstyled" id="turno" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Primer Turno</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Segundo Turno</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Tercer Turno</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#capacitaciones" data-toggle="collapse" aria-expanded="false">  <i class="fas fa-chalkboard-teacher" style="font-size:25px;"></i> <span style="position:relative;left:20px;top:-2px; font-weight:600; font-size:18px;"> Capacitacion  </span></a>
            <ul class="collapse list-unstyled" id="capacitaciones" style="">
               <li><a href="meseros.php"><span style="position:relative;left:25px;font-weight:600;"> Meseros</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Cocineros</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Chef</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Ayudante de Cocina</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Ayudante de Parilla</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#estadistica" data-toggle="collapse" aria-expanded="false">   <img src="img/estadistica.png"  style="width: 45px;height: auto; position:relative;left:-5px;" alt=""> <span style="position:relative;left:5px;top:3px; font-weight:600; font-size:18px;"> Estadisticas  </span></a>
            <ul class="collapse list-unstyled" id="estadistica" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Semanual</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Mensual</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Anual</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#ayuda" data-toggle="collapse" aria-expanded="false">  <i class="fa fa-info-circle" style="font-size:25px;"></i> <span style="position:relative;left:20px;top:-2px; font-weight:600; font-size:18px;"> Ayuda  </span></a>
            <ul class="collapse list-unstyled" id="ayuda" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Manuales</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Tablas</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Reportes</span></a></li>
            </ul>
         </li>
      </ul>
   </nav>
   <div id="content">
      <div class="container">
         <div class="row">
            <div class="col-md-6 hidden-xs hidden-sm">
               <div style="margin-top:100px;"></div>
               <h3>Apartado del administrador</h3>
               <iframe src="https://calendar.google.com/calendar/embed?src=2eiidkh686q0jhjuro5j8o2uak%40group.calendar.google.com&ctz=America%2FMexico_City" style="border: 0; margin-top:50px; "  width="100%" height="400" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm">
               <div id="piechart" style="margin-top:190px;width:600px;height:400px;"></div>
            </div>
         </div>
      </div>
   </div>
   <?php}?>
   <?php }if($roles=="Mesero"){?>
   <nav id="sidebar">
      <ul class="list-unstyled ">
         <p style="text-align:center;font-weight:600;">Menu de Operaciones</p>
         <li class="" style="margin-top:30px;">
            <a href="#roles" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-list-alt" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Roles / Tareas </span></a>
            <ul class="collapse list-unstyled" id="roles" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> <?php echo $roles;?> </span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#calendario" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-calendar" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Calendario </span></a>
            <ul class="collapse list-unstyled" id="calendario" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Definir </span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Definir</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#turno" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-time" style="font-size:25px;"></i> <span style="position:relative;left:28px;top:-2px; font-weight:600; font-size:18px;"> Turnos  </span></a>
            <ul class="collapse list-unstyled" id="turno" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Turno <?php echo $turno?></span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#capacitaciones" data-toggle="collapse" aria-expanded="false">  <i class="fas fa-chalkboard-teacher" style="font-size:25px;"></i> <span style="position:relative;left:20px;top:-2px; font-weight:600; font-size:18px;"> Capacitaciones  </span></a>
            <ul class="collapse list-unstyled" id="capacitaciones" style="">
               <li><a href="meseros.php"><span style="position:relative;left:25px;font-weight:600;"> Capacitacion</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#ayuda" data-toggle="collapse" aria-expanded="false">  <i class="fa fa-info-circle" style="font-size:25px;"></i> <span style="position:relative;left:20px;top:-2px; font-weight:600; font-size:18px;"> Ayuda  </span></a>
            <ul class="collapse list-unstyled" id="ayuda" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Manuales</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Tablas</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Reportes</span></a></li>
            </ul>
         </li>
      </ul>
   </nav>
   <div id="content">
      <div style="margin-top:100px; "></div>
      <h2 style="color:#000;">Contenido o estadisticas </h2>
      <h3 style="color:#000;">Apartado de Meseros</h3>
      <a href="https://analytics.google.com/analytics/web/template?uid=NqkwKRQ8S1GKnKCGuGJ74w" style="color:#000;">lñsadlñkasñldkñkl</a>
   </div>
   <?php }if($roles=="Cocinero"){?>
   <nav id="sidebar">
      <ul class="list-unstyled ">
         <p style="text-align:center;font-weight:600;">Menu de Operaciones</p>
         <li class="" style="margin-top:30px;">
            <a href="#roles" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-list-alt" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Roles / Tareas </span></a>
            <ul class="collapse list-unstyled" id="roles" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> <?php echo $roles;?> </span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#calendario" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-calendar" style="font-size:25px;"></i> <span style="position:relative;left:25px;top:-2px; font-weight:600; font-size:18px;"> Calendario </span></a>
            <ul class="collapse list-unstyled" id="calendario" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Definir </span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Definir</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#turno" data-toggle="collapse" aria-expanded="false">  <i class="glyphicon glyphicon-time" style="font-size:25px;"></i> <span style="position:relative;left:28px;top:-2px; font-weight:600; font-size:18px;"> Turnos  </span></a>
            <ul class="collapse list-unstyled" id="turno" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Turno <?php echo $turno?></span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#capacitaciones" data-toggle="collapse" aria-expanded="false">  <i class="fas fa-chalkboard-teacher" style="font-size:25px;"></i> <span style="position:relative;left:20px;top:-2px; font-weight:600; font-size:18px;"> Capacitacion  </span></a>
            <ul class="collapse list-unstyled" id="capacitaciones" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Video 1</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Video 2</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Video 3</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Video 4</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Video 5</span></a></li>
            </ul>
         </li>
         <li class="" style="margin-top:30px;">
            <a href="#ayuda" data-toggle="collapse" aria-expanded="false">  <i class="fa fa-info-circle" style="font-size:25px;"></i> <span style="position:relative;left:20px;top:-2px; font-weight:600; font-size:18px;"> Ayuda  </span></a>
            <ul class="collapse list-unstyled" id="ayuda" style="">
               <li><a href="#"><span style="position:relative;left:25px;font-weight:600;"> Manuales</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Tablas</span></a></li>
               <li><a href="#" ><span style="position:relative;left:25px;font-weight:600;"> Reportes</span></a></li>
            </ul>
         </li>
      </ul>
   </nav>
   <div id="content">
      <div style="margin-top:100px; "></div>
      <h2 style="color:#000;">Contenido o estadisticas </h2>
      <h3 style="color:#000;">Apartado de Cocineros</h3>
   </div>
   <?php }?>
   <?php }?>
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   <script src="js/jquery.nicescroll.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
              $(this).toggleClass('active');
          });
      });
   </script>
   <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Asistencia', 'Porciento'],
          ['dato1',     60],
          ['dato2',     30],
          ['dato3',  10]
        ]);
         var options = {
          title: 'La Asistencia del mes fue de  dato1, dato2 y dato3',
          is3D: true,};
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
   </script>	
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
</body>
</html>