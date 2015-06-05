<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

$archivologs ="logs.dat";
@$ip= getenv(REMOTEADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

$contenido = date('U')."|".date("y"."|"."m"."|"."d"."|"."H"."|"."i"."|"."s")."|".$navegador."|".$ip."\n";

$manejador = fopen($archivologs, 'a+');
fwrite($manejador,$contenido);

?>
</body>
</html>