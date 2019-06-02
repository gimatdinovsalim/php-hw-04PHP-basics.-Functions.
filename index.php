<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>04.Основы PHP. Функции</title>
</head>
<body>
	<?php 

	
	function days($name, $week) {

		switch ($week) {
			case "Понедельник";
				echo "Привет " . $name . "! Хорошего и продуктивного рабочего дня";
				break;
			case "Вторник";
				echo "Привет " . $name . "! Хорошего и продуктивного рабочего дня";
				break;
			case "Среда";
				echo "Привет " . $name . "! Хорошего и продуктивного рабочего дня";
				break;
			case "Четверг";
				echo "Привет " . $name . "! Хорошего и продуктивного рабочего дня";
				break;
			case "Пятница";
				echo "Привет " . $name . "! Хорошего и продуктивного рабочего дня";
				break;
			case "Суббота";
				echo "Привет " . $name . "! Желаю вам хорошо отдохнуть в этот день";
				break;
			case "Воскресенье";
				echo "Привет " . $name . "! Желаю вам хорошо отдохнуть в этот день";
				break;
			default:
				echo "Нет такого дня недели";
		}
	}


	days("Серж", "Понедельник");




	 ?>
	
</body>
</html>