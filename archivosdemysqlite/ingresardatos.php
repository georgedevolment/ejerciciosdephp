<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$dbh = new PDO("sqlite:basededatos.sqlite");
	
	$consulta ="INSERT INTO discos VALUES ('Queen','Queen')";
	$consulta ="INSERT INTO discos VALUES ('Queen','Queen II')";
	$consulta ="INSERT INTO discos VALUES ('Queen','Sheer Heart Attack',1974)";
	$consulta ="INSERT INTO discos VALUES ('Queen','A Nigth At The Opera')";
	$consulta ="INSERT INTO discos VALUES ('U2','Boy')";
	$consulta ="INSERT INTO discos VALUES ('U2','October')";
	$consulta ="INSERT INTO discos VALUES ('U2','war')";
	$consulta ="INSERT INTO discos VALUES ('U2','Under a Blood Sky')";
	
	
	
	?>
</body>
</html>