<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado archivos - Trucoteca</title>
</head>
<style>
	body{font-family: Arial;}
</style>
<body>
	<legend><b>Listado de archivos</b> - Trucoteca</legend>
	<br><br>
<?php
$directorio = opendir("."); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        //echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {	
    	if($archivo =='listado.php'){}
    	elseif($archivo =='trucoteca.sublime-project'){}
    	elseif($archivo =='trucoteca.sublime-workspace'){}
        else { echo '<a href="'.$archivo . '">'.$archivo . "</a><br />"; }
    }
}
?>
</body>
</html>