<?php

function __get($prop)
{ 
 echo "¡OJO!, propiedad '$prop' NO declarada <BR>";
}

function __set($prop, $valor)
{
echo "¡OJO!, propiedad '$prop' NO declarada. No se pudo asignar a '$prop' el valor '$valor'";
}
?>
