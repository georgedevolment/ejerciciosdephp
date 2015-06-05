<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	$dbh = new PDO("sqlite:basededatos.sqlite");

	
	$creartabla = 'CREATE TABLE animals(
	 animal_id char(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 animal_type char(25) NOT NULL,
	 animal_name VARCHAR(25) NOT NULL, 
	 )';

/*$consulta =new PDO('INSERT INTO `animals` (`animal_id`, `animal_type`, `animal_name`) VALUES
(1, 'kookaburra','bruce'),
(2, 'emu', 'bruce'),
(3, 'goanna', 'bruce'),
(4, 'dingo', 'bruce'),
(5, 'kangaroo', 'bruce'),
(6, 'wallaby', 'bruce'),
(7, 'wombat', 'bruce'),
(8, 'koala', 'bruce');
');
	if($cosulta==TRUE){
	echo "tabla creada";	
	}
	$dbh = NULL;
	*/
?>
</body>
</html>