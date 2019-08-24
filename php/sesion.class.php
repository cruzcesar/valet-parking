<?php
class sesion {
  function __construct() {
     session_start ();
  }
  public function set($email, $valor) {
     $_SESSION [$email] = $valor;
	 
  }
  public function get($email) {
     if (isset ( $_SESSION [$email] )) {
        return $_SESSION [$email];
     } else {
         return false;
     } 
  }
  
  /*extrar nombre*/
  public function set_datos($nombre,$valor) {
     $_SESSION [$nombre] = $valor;
	 
  }
  public function get_datos($nombre) {
      if (isset ( $_SESSION [$nombre] )) {
        return $_SESSION [$nombre];
     } else {
         return false;
     } 
  }
   /*extrar area*/
  public function set_area($area,$valor) {
     $_SESSION [$area] = $valor;
	 
  }
  public function get_area($area) {
      if (isset ( $_SESSION [$area] )) {
        return $_SESSION [$area];
     } else {
         return false;
     } 
  }
    /*extrar roles*/
  public function set_roles($roles,$valor) {
     $_SESSION [$roles] = $valor;
	 
  }
  public function get_roles($roles) {
      if (isset ( $_SESSION [$roles] )) {
        return $_SESSION [$roles];
     } else {
         return false;
     } 
  }

/*extrar sucursal*/
public function set_sucursal($sucursal,$valor) {
   $_SESSION [$sucursal] = $valor;
  
}
public function get_sucursal($sucursal) {
    if (isset ( $_SESSION [$sucursal] )) {
      return $_SESSION [$sucursal];
   } else {
       return false;
   } 
}

/*extrar sucursal*/
public function set_turno($turno,$valor) {
   $_SESSION [$turno] = $valor;
  
}
public function get_turno($turno) {
    if (isset ( $_SESSION [$turno] )) {
      return $_SESSION [$turno];
   } else {
       return false;
   } 
}


   /*nueva funcion para rescatar la imagen usuario*/
   public function set_foto($foto,$valor) {
     $_SESSION [$foto] = $valor;
	 
  }
  public function get_foto($foto) {
      if (isset ( $_SESSION [$foto] )) {
        return $_SESSION [$foto];
     } else {
         return false;
     } 
  }
  
   /*termina la sesion*/
  public function elimina_variable($email) {
      unset ( $_SESSION [$email] );
  }
  public function termina_sesion() {
      $_SESSION = array();
      session_destroy ();
  }
}
?>