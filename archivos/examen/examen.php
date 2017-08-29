<!DOCTYPE html>
<head>

<?php require '../../html/cabecera.php'; ?>  	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>



<body>
	<fieldset>
		<h1 class="center">EXAMEN DE PROGRAMACIÓN I</h1>
	</fieldset> 
	<P class="parrafo1"> El objetivo del examen es diseñar un micro sitio, el cuál hara lo siguiente:
	<OL> 
	<LI> Hacer un header y footer incluyento in archivo (require); <P>
	<LI> El cuerpo del archivo contendra un formulario con la siguiente información:
	<BLOCKQUOTE>
		<UL>
		<LI> Nombre:
		<LI> Apellidos:
		<LI> Edad: 
		<LI> Sexo: 
		<LI> Estado civil: 
		</UL>
	</BLOCKQUOTE>
	<LI> Creare una pagina nueva con el contenido de la anterior, pero el cuerpo sera
   mostrar los datos ingresados por el usuario.
	</OL>
	<fieldset>
	<H1><B><CENTER><FONT FACE="cooper black"> ¡QUE COMIENCE EL EXAMEN! </FONT><CENTER></B></H1>
	</fieldset>
	

<form action="visualizardatos.php" method="POST">
	<div class="container">
  <form>
    <div class="form-group row">
      <label for="inputName3" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" >
      </div>

 
    </div>
    <div class="form-group row">
      <label for="inputApellidos3" class="col-sm-2 col-form-label">Apellidos</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="apellidos" id="inputApellidos3" placeholder="Apellidos">
      </div>


    <div class="form-group row">
      <label for="inputEdad3" class="col-sm-2 col-form-label">Edad <BR></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEdad3" placeholder="Edad" name="edad">
      </div>  
    

    
      Sexo
	<div class="form-check form-check-inline">
  	  <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="masculino"> masculino
      </label>
    </div>

	<div class="form-check form-check-inline">
  		<label class="form-check-label">
    	<input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="femenino"> femenino
  		</label>
	</div>

	<div class="form-check form-check-inline disabled">
  		<label class="form-check-label">
    	<input class="form-check-input" type="radio" name="sexo" id="inlineRadio3" value="Imposible" disabled> No sabe, no contesta <BR>
  	</label>
	</div>

	<BR>Estado civil: <BR>
	<select name="estado_civil" class="form-control form-control-lg">
  		<option value= "casado">Casado</option>
  		<option value= "divorciado">Divorciado</option>
  		<option value= "soltero">Soltero</option>
  		<option value= "soltero divorciado">Soltero divorciado</option>
  		<option value= "viudo">Viudo</option>
	</select>

<input type="submit" value="Submit">	
</form>

</body>
</html>






 