<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$email = $sesion->get("email");	
	if( $email == false )
	{	
		header("Location: ../index.php");
	}
	else 
	{
		$email = $sesion->get("email");	
		$sesion->termina_sesion();	
		header("location: ../index.php");
	}
?>