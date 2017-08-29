<?php

class Cliente
{
	protected $nombre; 
	protected $apellidos;
	protected $edad;
	protected $sexo;
	protected $estadocivil;
	static private $contador1 = 0;
	static private $contador2 = 0;
	protected $nuevocliente;
	
	

// Este metodo nos permite implementar las propiedades del objeto
	public function setName($nombre)
		{
		$this->nombre = $nombre;
		}
	public function setApellidos($apellidos)
		{
		$this->apellidos = $apellidos;
		}
	public function setEdad($edad)
		{
		$this->edad = $edad;
		}
	public function setSexo($sexo)
		{
		$this->sexo = $sexo;
		}
	public function setEstadoCivil($estadocivil)
		{
		$this->estadocivil = $estadocivil;
		}
// Estos métodos nos permetirán obtener el nombre del objeto.
	public function getName()
		{
		return $this->nombre;
		}
	public function getApellidos()
		{
		return $this->apellidos;
		}
	public function getEdad()
		{
		return $this->edad;
		}
	public function getSexo()
		{
		return $this->sexo;
		}
	public function getEstadoCivil()
		{
		return $this->estadocivil;
		}

//  Este metodo nos permite guardar todas las propiedades y las claves en un array: 
	public function arrayAllData()
		{
		$this->nuevocliente = array(
			"nombre" => $this->nombre,
			"apellidos" => $this->apellidos,
			"edad" => $this->edad,
			"sexo" => $this->sexo,
			"estadocivil" => $this->estadocivil);
		}

// Mostramos por pantalla (Si se utiliza el método) los datos del array: 
	public function getAllData()
	{
		foreach ($this->nuevocliente as $key => $value) 
			var_dump (ucfirst($key) . "=" . $value . PHP_EOL) ;	
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
		Cliente::$contaodr2++;
	}
}

?>