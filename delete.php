<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
$conexion = mysql_connect("localhost","jorge","jorge");

mysql_select_db("agenda",$conexion);

mysql_query("DELETE FROM miagenda WHERE Nombre = 'Marta' AND Apellido= 'Lopez'");

mysql_close($conexion);

?>
</body>
</html>