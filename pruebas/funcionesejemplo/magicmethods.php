<?php
class Mi_Primera_Clase
{
	public $mi_primera_propiedad;
	public function saludame()
	{
		echo "Hola mundo :)" . PHP_EOL . $this->mi_primera_propiedad . PHP_EOL ;
	echo  __METHOD__ .  PHP_EOL;
	}
	function __get($prop)
	{ 
	echo __METHOD__ . PHP_EOL ; 
 	echo "¡OJO!, propiedad '$prop' NO declarada ". PHP_EOL ;
	}

	function __set($prop, $valor)
	{
	echo "¡OJO!, propiedad '$prop' NO declarada. No se pudo asignar a '$prop' el valor '$valor'". PHP_EOL ;
	}
	function __call($metodo, $atributos)
	{
	echo "¡OJO!, metodo '$metodo' NO declarado. ". PHP_EOL;
	}
	function __construct()
	{
	$this->mi_primera_propiedad='Hola mundo, soy una repuesta por defecto creada por el constructor';
	}
	
/* Esto lo que hace es comprobar que a la hora de crear la clase se ha mandado un String como respuesta.
	function __construct($param)
	{
	if (gettype($param) != 'string')
	  die("ERROR: no puedo responder a un hola con números, ¿No crees?" . PHP_EOL);
	else
	  $this->mi_primera_propiedad=$param;
	}
*/
}

$mi_primer_objeto= new Mi_Primera_Clase();
$mi_primer_objeto->mi_primera_propiedad ='Hola que tal';
$mi_primer_objeto->saludame();
$mi_primer_objeto->se_que_no_existe_esta_propiedad='Era por probar los magic method';
echo $mi_primer_objeto->esta_tampoco_exite;
$mi_primer_objeto->metodoinexistente();
echo __METHOD__ . PHP_EOL ;
?>
