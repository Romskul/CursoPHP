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
            // Si se ejecuta así, daria error de sintaxis puesto que las "" de class no pueden ir así
            // Han de ir con '' por sintaxis de anidamiento de comillas.

                // echo "<p class="resaltar">Esto es un ejemplo de frase</p>";
                // echo "<p class='resaltar'>Esto es un ejemplo de frase</p>"

            // Tambien se pueden utilizar las barras invertidas para crear un salto de caracter.
                // echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>"

            // Para comparar 2 o mas strings y ver si son iguales hay 2 FUNCIONES en php.
            // Ambas funciones devuelven un 0 si SÍ coinciden (false) y un 1 si NO coinciden (true)

                $variable1="Casa";
                $variable2="CASA";

               

            //------------- funcion strcmp ------------------
            // -Compara valores de strings si estás usando mayusculas o minusculas

                $resultado=strcmp ($variable1, $variable2); // Devuelve 1 si NO son iguales y 0 si SON iguales

                // echo "El resultado es $resultado"
                if ($resultado){
                    echo "No coinciden <br>";
                } else {
                    echo "Coinciden <br>";
                }

            //------------- funcion strcasecmp ------------------
            // - Compara valores de tipo strings ignorando si estan en minuscula o mayuscula

                $resultado=strcasecmp ($variable1, $variable2); // Devuelve 1 si NO son iguales y 0 si SON iguales
                if ($resultado){
                    echo "No coinciden <br>";
                } else {
                    echo "Coinciden <br>";
                }

            // - Ya que lo que devuelven las funciones strcmp y strcasecmp es poco intuitivo en cuanto
            // a qué valor boleano devuelven, se puede usar la NEGACIÓN para hacerlo mas legible.
            $resultado=strcmp ($variable1, $variable2); // Devuelve 1 si NO son iguales y 0 si SON iguales

                // echo "El resultado es $resultado"
                if (!$resultado){
                    echo "No coinciden tras cambiar strcmp con ! <br>";
                } else {
                    echo "Coinciden tras cambiar strcmp con ! <br>";
                }

                $resultado=strcasecmp ($variable1, $variable2); // Devuelve 1 si NO son iguales y 0 si SON iguales
                if (!$resultado){
                    echo "No coinciden tras cambiar strcmp con ! <br>";
                } else {
                    echo "Coinciden tras cambiar strcmp con ! <br>";
                }
    ?>


	
    

	</body>
</html>