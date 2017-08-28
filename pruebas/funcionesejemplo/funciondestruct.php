<?php
class Ajedrez
{
function __destruct()
	{
	echo "ahora si se ha destruido la ultima referencia a Ajedrez." . PHP_EOL;
	}
}

$objeto_rey= new Ajedrez();
$objeto_principe = $objeto_rey;
echo "jaque al rey" . PHP_EOL ; 
unset($rey);
echo "no ha desaparecido la ultima referencia al Ajedrez, falta matar al principe" . PHP_EOL ;
unset($principe);
?>
