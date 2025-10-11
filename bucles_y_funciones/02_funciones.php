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

		// 13. Potencia de 2 con bucle do-while. 5 1ºs potencias de 2
		$base = 2;
		$exponent = 1;
		$count = 0;
		echo "13. 5 primeras potencias de 2: ";	
		do {
			$power = pow($base, $exponent);
			echo "$power, ";
			$exponent++;
			$count++;
		} while ($count < 5);
		echo "<br />";


		// CON FUNCIONES 

		// 14. Crea fx llamada "saludar" que reciba un nombre y devuelva un saludo personalizado"
		function saludar($name) {
			return "Henlo, $name! <br />";
		};
		echo "14. " . saludar("Antonio");

		// 15. Crea fx calcularCuadrado que reciba un número y devuelva su cuadrado
		function calcularCuadrado($num) {
			return $num * $num;
		};
		echo "15. El cuadrado de 4 es " . calcularCuadrado(4);
		echo "<br />";

		// 16. Crear fx clasificarNumero que reciba un número y devuelva si es positivo, negativo o cero
		function clasificarNumero($num) {		
			if ($num > 0) {
				return "positivo";
			} elseif ($num < 0) {
				return "negativo";
			} else {
				return "cero";
			};
		};
		echo "16. El número -3 es " . clasificarNumero(-3);
		echo "<br />";
		echo "16. El número 0 es " . clasificarNumero(0);
		echo "<br />";
		echo "16. El número 5 es " . clasificarNumero(5);

		// 17. Crear fx concatenarPalabras que reciba dos palabras y devuelva una cadena que las concatene
		function concatenarPalabras($word1, $word2) {
			return $word1 . " " . $word2;
		};
		echo "<br />17. " . concatenarPalabras("Bye", "World");

	?>

</body>
</html>