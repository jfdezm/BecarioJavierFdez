<?php

/* Este modulo abre, lee y cierra un directorio determinado mandado por consola
   En caso de no mandar ningun directorio, lo que hace es mostrar el actual */

function orc($directorio) {
/* SPL STANDARD PHP LIBRARY (BUSCAR EN PHP)
foreach (new DirectoryIterator($directorio) as $fileInfo) {
    if($fileInfo->isDot()) continue;
    echo $fileInfo->getFilename() . "<br>\n";
}
*/
/*	if($handle = opendir($directorio)) {
		while (false !==  ($entry = readdir($handle))) {
			print_r($entry . PHP_EOL);
		}
	}
*/
	$identificador = opendir($directorio)
		or die("El directorio " . $directorio . " no se ha podido abrir");

	$matrizaux = readdir($identificador);

	do
	{
		$matrizaux = readdir($identificador);
			if ($matrizaux[0]!=="." && false !== $matrizaux){
				echo "$matrizaux \n"; 
			}
		
	}
	while(false !== $matrizaux);

   	closedir($identificador);
}
orc((isset($argv[1])) ? $argv[1] : getcwd());
