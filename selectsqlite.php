<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
echo
"<table border=1><tr><td>Disco</td><td>Artista</td></tr>";
	
	$dbh = new PDO("sqlite:basededatos.sqlite");
	$consulta ="SELECT * FROM discos";
	$resultado = $dbh->query($consulta);
	foreach ($resultado as $fila){
		
	echo "<tr><td>".$fila['artista']."</td><td>".$fila['DISCO']."</td></tr>";	
		
	}
	
	echo "</table>";
	/*foreach ($dbh -> query ($consulta) as $row)
	{
		echo $row['artista'].$row['Disco']."<br />";
		
	}*/

?>
</body>
</html>