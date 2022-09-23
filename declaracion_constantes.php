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

        // Para declarar una constante se debe utilizar el metodo "define" y se le pasan dos parametros:
        // 1. El nombre de la constante
        // 2. El valor de la constante
        // El nombre de la constante debe ir en mayusculas y no puede llevar el signo de dolar "$"
        // El ambito de una constante es global, es decir, que se puede acceder a ella desde cualquier parte del codigo
        // Una vez declarada una constante no se puede modificar su valor (no se puede redefinir)
        // Las constantes solo pueden almacenar valores escalares (booleanos, enteros, flotantes, cadenas y null) y Arrays desde PHP 5.6.0
        //--------------------------------------------------------------------------------------------------------
        define("AUTOR", "Juan");

        // echo AUTOR;
        //--------------------------------------------------------------------------------------------------------
        // Las constantes no se pueden imprimir igual que una variable en un string.
        // Para imprimir una constante en un string se debe utilizar la funcion "constant" y se le pasa como parametro el nombre de la constante

        echo "El autor es " . constant("AUTOR");

        // Para comprobar si una constante existe se utiliza la funcion "defined" y se le pasa como parametro el nombre de la constante
        // Ejemplos de constantes predefinidas de PHP:

        echo "la linea de esta instrucción es: " . __LINE__ . "<br>";

        echo "Estamos trabajando con este fichero: " . __FILE__ . "<br>";

        echo "la version de PHP actual es: " . PHP_VERSION . "<br>";
        

           
    ?>


	
    

	</body>
</html>