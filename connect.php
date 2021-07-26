<?php




//Conexion de a la Base de Datos y Selección de Base de Datos
function conecta()
{
	$conexion=new mysqli('dbservintel.cdlkhezi2tsz.us-east-1.rds.amazonaws.com', 'admin', 'servintel123', 'dbservintel');
	return $conexion;
}







?>








