<?php
class Mi_Primera_Clase
{
	public $mi_primera_propiedad;
	public function saludame(){
		echo "Hola mundo :)" . PHP_EOL . $this->mi_primera_propiedad . PHP_EOL ;
	}
}

$mi_primer_objeto= new Mi_Primera_Clase();
$mi_primer_objeto->mi_primera_propiedad ='Hola que tal';
$mi_primer_objeto->saludame();

?>
