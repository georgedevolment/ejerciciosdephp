<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$conexion =mysql_connect("localhost","jorge","jorge");

if(!$conexion){
die("No he podido conectar porque:  ".mysql_error());
}
mysql_select_db("agenda",$conexion);

$peticion = mysql_query("SELECT * FROM miagenda");
while($fila=mysql_fetch_array($peticion))	
{
echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
echo"<br>";
}
mysql_close($conexion);
?>
</body>
</html>