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
    /*
        print "Bienvenidos al curso de PHP <br>"; //imprime un mensaje en pantalla + salto de linea (<br>)
        
        print "Hola alumnos <br>";

        print "Hasta el proximo video";

        /* Los comentarios en php se escriben igual que en javascript*/

        //  ------------- VARIABLES EN PHP -------------------
        //  Las variables en php siempre empiezan con el simbolo $
        //  No deben incluir simbolos extranyos
        //  No deben comenzar por valores numericos
        //  No espacios en blanco
        //  Los strings van entre comillas.

        $nombre = "Juan"; 
        $edad = 18;

        //  Las concatenaciones en php se hacen con un . 
        //  Siempre es conveniente que delante y detras del . en una concatenenacion haya un espacion en blanco
        //  "print" imprime en pantalla

        //  print "El nombre del usuraio es " . $nombre . "y tiene una edad de " . $edad;

        //  Se pueden incluir las variables dentro de un string SIEMRPE QUE VAYA ENTRE COMILLAS DOBLES ("")

        //  print "El nombre del usurario es $nombre y su edad es $edad años";

        //  Si el string va entre comillas simples, lo escribe LITERALMENTE.

        //  print 'El nombre del usurario es $nombre y su edad es $edad años';

        //  "echo" imprime igualmente en pantalla
        //  "echo admite escribir una lista de variables separadas con una coma.
        //  "echo" requiere menos recursos para imprimir, por lo que es mas utilziado en codigos complejos.


        echo "El nombre es " . $nombre . " y tiene " . $edad . " años";
        echo $nombre,$edad;
    ?>

	</body>
</html>