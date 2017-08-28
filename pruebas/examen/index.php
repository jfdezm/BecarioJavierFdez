<?php 

$name = isset($_GET['name']) ? $_GET['name'] : 'Invitado';

echo "<h1>Hola " . $name . '</h1>'; 