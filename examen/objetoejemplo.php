<?php

require 'clasecliente.php';

// Creamos un nuevo cliente:

$cliente = new Cliente();

foreach ($_POST as $key => $value) 
{
	$cliente->$key = $value;
}

$cliente-> save($cliente->getAllData());

?>

