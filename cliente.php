<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
@$tuip = getnv(REMOTE_ADDR);
echo "tu IP es :  ".$tuip;
echo"<br>";
$tunavegador=$_SERVER["HTTP_USER_AGENT"];

echo "y tu sistema operativo y navegador es: ".$tunavegador;
?>
<body>
</body>
</html>