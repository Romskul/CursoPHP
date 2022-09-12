<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<style>
		
		</style>
	</head>
	<body>
    

    <?php
        //  En php se pueden tener 2 o mas bloques de codigo
        //  En uno pueden ir funciones y en otro codigo y llamadas
        
        // function dameDatos() {

        //     echo "Este es el mensaje del interior de la funcion <br>";

        // }

    ?>
	
    <?php

        // El flujo de ejecucion va de arriba a abajo.
        // las funciones se declaran igual que en javascript
    
        // echo "Este es el primer mensaje <br>";

        // function dameDatos() {

        //     echo "Este es el mensaje del interior de la funcion <br>";

        // }


        // dameDatos();

        // echo "Este es el segundo mensaje <br>";

     
        
    ?>

    <?php
        //  ------------- INCLUDE ---------------------
        //  Cuando se quiere incluir codigo perteneciente a otro archivo .php se usa la  instruccion "INCLUDE"
        //  Si incluimos un nombre de archivo que no existe, marca el error y el codigo se sigue ejecutando igualmente.
        // 

        echo "Este es el primer mensaje <br>";

        include ("proporciona_datos.php");

        echo "Este es el segundo mensaje <br>";

        dameDatos();

        //  ------------- REQUIRE ---------------------
        //  la diferencia entre include y require, es que si incluimos un archivo NO existente, SE CORTA EL FLUJO DEL CODIGO.
        //  Con esta instruccion indicamos que el archivo se REQUIERE para la ejecucion del programa.
        //  "include" es mas flexible.

        echo "Este es el primer mensaje <br>";

        require ("proporciona_datos.php");

        echo "Este es el segundo mensaje <br>";

        dameDatos();

    ?>

	</body>
</html>