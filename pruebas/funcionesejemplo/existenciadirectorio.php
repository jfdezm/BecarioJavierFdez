<?php

// Este programa tiene como objetivo crear una función que compruebe la existencia de un directorio

function existe($directorio)
{
if (chdir($directorio))
	echo "<B> El directorio: $directorio existe y ha quedado fijado como actual </B>";
else	
	echo "<B> El directorio $directorio no existe y no se ha podido fijar como actual </B>";
}

existe((isset($argv[1])) ? $argv[1] : getcwd());
