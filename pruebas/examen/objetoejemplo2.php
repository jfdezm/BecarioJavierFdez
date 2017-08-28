<?php

class Cliente
{
//Declaracion de las propiedades de clase
	protected $nombre; 
	protected $apellidos;
	protected $edad;
	protected $sexo;
	protected $estadocivil;
	static private $contador1 = 0;
	static private $contador2 = 0;
	

//Declaración de los constructores
	public function __construct($nuevocliente)
	{
		$errors = 0 ; 

		foreach ($nuevocliente as $key => $value)
		{
			if(is_null($value))
			{
				unset ($nuevocliente);
				$errors = 1;
				die("Introduzca todos los valores del formulario. " . PHP_EOL);
			}
			else 
			{
				$this->$key = $value ;
			}
			
		}
		if (!$errors) 
			{
				echo "Se han introducido los datos correctamente";
				Cliente::$contador1++;
			}	

	}

/*  NO INTRODUCIMOS METODOS PARA SETEAR Y OBTENER LOS DATOS POR SEPARADO. SOLO SE CREA UN METODO QUE
	DEVUELVE TODOS LOS DATOS DEL USUARIO. */
	public function getAllDates()
	{
		foreach ($nuevocliente as $key => $value) {
			
		}
	}
}

$nuevocliente= array('nombre' => "Javi",'apellidos'=> null,"edad" => "23","sexo" =>"Masculino"  );
$objeto1= new Cliente($nuevocliente);

?>


