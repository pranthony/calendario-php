<?php 
require './includes/header.php';

?>
	<section class="container">
		<div>
			<h1>Agregar evento</h1>
		</div>
		<form method="POST" action="controlador.php">
		<table>
			<tr>
				<th>Asunto</th>
				<th><input type="text" name="asunto"></th>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>
					<textarea>
						
					</textarea>
				</td>
			</tr>
			<tr>
				<td>Hora Inicio</td>
				<td><input type="number" name="hInicio"></td>
			</tr>
			<tr>
				<td>Hora Final</td>
				<td><input type="number" name="hFinal"></td>
			</tr>
		</table>
		<input type="submit" name="" value="Agregar"> 
		</form>
	</section>
</body>
</html>