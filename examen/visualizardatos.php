<!DOCTYPE html>
<html>
<head>
	<TITLE> Resultado encuenta de Javi Fdez </TITLE>

	<?php include '../html/cabecera.php'; ?>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	 
</head>


<body>

<?php
session_start();


if(count($_POST))
{	
	foreach ($_POST as $k => $v) 
	{
		$_SESSION[$k]=$v;

	}
	//print_r($_SESSION);
} else {
	//echo 'in session: ';
	//print_r($_SESSION);
}

?>

<table class="table">
	<thead class="table-inverse">
		  <th>Preguntas</th>
		  <th> Respuestas </th> 
	</thead>
	<tbody>
		<?php foreach ($_SESSION as $k => $v): ?>
		<tr>
			<td><?php echo str_replace('_', ' ', $k); ?></td>
			<td><?php echo $v; ?></td> 
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php include '../html/footer.php'; ?> 

</body>
</html>


<!--<caption> <BR>Encuesta del examen </caption> -->