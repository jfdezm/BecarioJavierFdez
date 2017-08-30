<?php


class DAO {
	protected $file = 'milistadeclientes.log';
	protected $identificador = null ; 

	public function __construct() {
		
	}
 
	public function save(array $datoscliente) 
	{
		$this->identificador = fopen (__DIR__ . '/' . $this->file, 'a+');
/*		var_dump($this->identificador);
		if (! $this->identificador)
			{
			echo "no se ha podido encontrar el archivo : " . $this->file . "  . En la dirección: " . __DIR__ . '/'. $this->file ;
			}
*/		
		if (empty($datoscliente))
			{
			print_r("Por favor introduzca todos los datos del formulario");
			}
		else
			{
				fwrite($identificador, implode(" , " , $datoscliente) . PHP_EOL );
				print_r("Conseguido, se ha guardado el cliente.");
			}

		fclose($this->identificador);
	}


}
