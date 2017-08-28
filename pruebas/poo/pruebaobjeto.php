<?php
//Prueba creación de objetos: 







//Para no tener que poner mañana de nuevo un ejemplo:
require_once 'clasecliente.php';

$mi_primer_objeto = new Cliente();
$mi_primer_objeto->setname('Javier');
$mi_primer_objeto->setapellidos('Fernández Muñoz');
$mi_primer_objeto->setedad('23');
$mi_primer_objeto->setsexo('Masculino');
$mi_primer_objeto->setestadocivil('	Soltero');


$mi_primer_objeto->arrayAllData();
$mi_primer_objeto->getAllData();
$mi_primer_objeto->numClientesLista();
$mi_primer_objeto->numClientesBorrados();

numClientesLista();
getname();
getapellidos();
getAllData();