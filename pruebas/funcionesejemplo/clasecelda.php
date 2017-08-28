<?php

class Clase_Celda {

   var $celda_alin_vertical; 
   var $celda_alin_horizontal; 
   var $celda_color_fondo;
   var $letra_tipo;
   var $letra_tamaño;
   var $letra_color;

	function pinta_celda($contenido) {
	  echo "<td align='$this->celda_alin_horizontal'
	        valign='this->celda_alin_vertical'
		bgcolor='this->celda_color_fondo'>";
	  echo "<font face='$this->letra_tipo'
		size='$this->$letra_tamaño'
		color='$this->$letra_color'>	
	  	$contenido
	  	</font>"
	  echo "</td>";
	}
}
