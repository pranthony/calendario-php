<?php
	if ($_GET['link']) {	
		switch ($_GET['link']) {
			case 'agregar':
				header('Location: agregar.php');
				break;
			
			default:
				header('Location index.php');
				break;
		}
	}

	if ($_POST){
		$requeridos = ['asunto','descipcion', 'horaI','HoraF'];
		foreach ($_POST as $key => $value) {
			if (in_array($key, $requeridos) && empty($value)) {
				$falta[] = $key;
				$$key = '';
			}
			$$key = $value;
		}
		if (!$falta) {
			
		}
	}