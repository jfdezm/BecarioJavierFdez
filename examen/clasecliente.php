<?php

require_once 'DAO.php';

class Cliente extends DAO
{
	private $datoscliente = array(
		'nombre' 		=> '',
		'apellidos'		=> '',
		'edad'			=> '',
		'sexo'			=> '',
		'estadocivil' 	=> '');

	static private $contador1 = 0;
	static private $contador2 = 0;
	
	public function __set($key,$value)
	{
		if(isset($this->datoscliente[$key]))
		{
			$this->datoscliente[$key] = $value;
		}
		else
			print_r("Error, no se encuentra en la clase la propiedad : " . $key . PHP_EOL);
	}

	public function __get($key)
	{
		if(isset($this->datoscliente[$key]))
		{
			return $this->datoscliente[$key];
		}
		else	
			print_r("Error, no existe la refencia del array" . $key . PHP_EOL);
		}
	
	public function getAllData()
	{
		return $this->datoscliente;
	}

// Aquí vamos a contar el número de usuarios que tenemos en la lista y cuántos usuarios se han eliminado:

	static function numClientesLista()
	{
		return Cliente::$contador1;
	}

	static function numClientesBorrados()
	{
		return Cliente::$contador2;
	}
	function __construct()
	{
		Cliente::$contador1++;
	}
	function __destruct()
	{
		Cliente::$contador1--;
		Cliente::$contador2++;
	}
}



?>