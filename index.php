<?php 
require './includes/header.php';
?>
	<section class="dia">
		<div class="note_add">
			<a href="controlador.php?link=agregar">
			<span class="material-icons">
				note_add
			</span>
			</a>
		</div>
		<div>
			
			<h2 class="text-center"> <?php echo date('d');
			echo " - ";
			date_default_timezone_set("America/Lima");
			echo(date("h:i")); 
			?></h2>
		</div>
		<div class="container">
			<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Hora</th>
						<th>Actividades</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$hora = date('H');
					
					for ($i=0; $i < 24; $i++) { 
					$now = $i==$hora? 'table-dark': 'table-info';; ?>
						<tr class="<?php echo $now; ?>">
							<td ><?= $i ?>:00</td>
							
						<td>add</td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
			</div>
		</div>
	</section>
</body>
</html>