<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
$conexion=mysql_connect("localhost","jorge","jorge");
/*
if(mysql_query("CREATE DATABASE agenda",$conexion))
{
echo "se ha creado la base de datos";	
}
else{
echo "no se ha creado la base de datos por el siguiente error: ".mysql_error();	
}
*/
//preparo esta peticion
mysql_select_db("agenda",$conexion);
$sql = "CREATE TABLE miagenda (
personaID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
)";

//ejecuto la peticion
mysql_query($sql,$conexion);
//cerrar conexion
mysql_close($conexion);

?>
<body>
</body>
</html>