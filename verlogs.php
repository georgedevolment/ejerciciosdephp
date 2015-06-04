<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$archivologs ="logs.dat";
$manejador =fopen($archivologs,"r");

echo '<table width=100% border="1">';

while ($datos =fgetcsv ($manejador, 1000000, "|")){
	
$marcartiempo = $datos[0];

$anyo=$datos[1];
$mes=$datos[2];
$dia=$datos[3];
$hora=$datos[4];
$minuto=$datos[5];
$segundo=$datos[6];
$navegador=$datos[7];
$ip=$datos[8];

echo'
<tr>
	<td border="1">'.$marcartiempo.'</td>
	<td border="1">'.$anyo.'</td>
	<td border="1">'.$mes.'</td>
	<td border="1">'.$dia.'</td>
	<td border="1">'.$hora.'</td>
	<td border="1">'.$minuto.'</td>
	<td border="1">'.$segundo.'</td>
	<td border="1">'.$navegador.'</td>
	<td border="1">'.$ip.'</td>
</tr>
';
	
}


echo'</table>';
fclose ($manejador);

?>
</body>
</html>