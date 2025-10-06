<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2. Bucles y Funciones</title>
</head>
<body>
	<?php
		// 9. Tabla de multiplicar
		echo "9. Tabla del 5 <br />";
		for($i = 1;  $i <= 10; $i++) {
			$n = 5;
			$r = $i * $n;
			echo "$i x $n = $r <br />";
		};

		// 10. Números pares con bucle while
		$even = 2;
		echo "10. Numeros pares hasta el 20: ";
		while ($even <= 20){
			if ($even % 2 == 0)
				echo "$even, ";
			$even++;
		};
		echo "<br />";

		// 11. Suma de primeros 50 numeros
		$add = 0;
		for($i = 1; $i <= 50; $i++){
			$add += $i;
		};
		echo "11. Suma de primeros 50 nums: $add";
		echo "<br />";

		// 12. Contar vocales en una palabra
		$word = "goose";
		$vowels = ['a', 'e', 'i', 'o', 'u'];
		$vCount = 0;
		for ($i = 0; $i < strlen($word); $i++){
			$letter = strtolower($word[$i]);
			if(in_array($letter, $vowels))
				$vCount++;
		};
		echo "12. La palabra \"$word\" tiene $vCount vocales.";
		echo "<br />";
	?>
</body>
</html>