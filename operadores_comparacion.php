<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<style>
		
            .resaltar {
                color: #F00;
                font-weight: bold;
            }

		</style>
	</head>
	<body>
    

    <?php
				$var1==$var2 // Igualdad ---------------------------- Devuelve true si son iguales
				$var1===$var2 // Identidad -------------------------- Devuelve true si son iguales y del mismo tipo
				$var1!=$var2 // Desigualdad ------------------------- Devuelve true si son diferentes
				$var1<>$var2 // Desigualdad ------------------------- Devuelve true si son diferentes
				$var1!==$var2 // No identidad ----------------------- Devuelve true si son diferentes o de distinto tipo
				$var1<$var2 // Menor que --------------------------- Devuelve true si $var1 es menor que $var2
				$var1>$var2 // Mayor que --------------------------- Devuelve true si $var1 es mayor que $var2
				$var1<=$var2 // Menor o igual que ------------------ Devuelve true si $var1 es menor o igual que $var2
				$var1>=$var2 // Mayor o igual que ------------------ Devuelve true si $var1 es mayor o igual que $var2
				$var1<=>$var2 // Espacio de navegación ---------------- Devuelve 0 si son iguales, 1 si $var1 es mayor que $var2 y -1 si $var1 es menor que $var2
				$var1<=>0 // Espacio de navegación ---------------- Devuelve 1 si $var1 es mayor que 0, -1 si $var1 es menor que 0 y 0 si $var1 es igual a 0
				$var1<=>null // Espacio de navegación ---------------- Devuelve 1 si $var1 es mayor que null, -1 si $var1 es menor que null y 0 si $var1 es igual a null
				$var1<=>false // Espacio de navegación ---------------- Devuelve 1 si $var1 es mayor que false, -1 si $var1 es menor que false y 0 si $var1 es igual a false
				$var1<=>true // Espacio de navegación ---------------- Devuelve 1 si $var1 es mayor que true, -1 si $var1 es menor que true y 0 si $var1 es igual a true
           
    ?>


	
    

	</body>
</html>