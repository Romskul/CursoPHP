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

    // - En este ejemplo, el valor de la variable contador no variará en cada llamada
    //   ya que cuando una funcion php termina el valor de sus variables locales SE DESTRUYE
    // - Para realizar el incremento, en el siguiente ejemplo se declarará una variable ESTATICA
    
    //    function incrementaVariable() {

    //         $contador=0;

    //         // con "++" estamos incrementando en 1 el valor de la variable
    //         // Tendrá valor 1 puesto que la hemos inicializado con valor 0
    //         $contador++;

    //         echo $contador . "<br>";

    //         // cuando una funcion php termina el valor de sus variables locales SE DESTRUYE

    //    }

    //    incrementaVariable();
    //    incrementaVariable();
    //    incrementaVariable();
    //    incrementaVariable();

    ?>


	 <?php
       function incrementaVariable() {

             // - Con la palabra clave "static" conseguiremos que la linea se ejecute LA PRIMERA VEZ
            // que se llame a la función
            // - Cuando la funcion finaliza, el valor de la variable se conserva.
            static $contador=0;
           
            $contador++;

            echo $contador . "<br>";

            // cuando una funcion php termina el valor de sus variables locales SE DESTRUYE

       }

       incrementaVariable();
       incrementaVariable();
       incrementaVariable();
       incrementaVariable();

    ?>
    

	</body>
</html>