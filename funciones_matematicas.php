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
        
        // $num1=rand(1,10);
        // $num2=pow(5,3);
        // $num3=5.75;

        // echo "El número aleatorio es: $num1"."<br>";
        // echo "La potencia del numero es: $num2"."<br>";
        // echo "El redondeo del numero es: ".round($num3,1 )."<br>";

        //--------------------CASTING IMPLICITO--------------------
        $num1="5";
        $num1+=2;
        // PHP toma el valor de la variable de tipo string y lo convierte en un entero ya que tiene un CASTING IMPLICITO
        $num1+5.75;
        // PHP toma el valor de la variable de tipo entero y lo convierte en un float ya que tiene un CASTING IMPLICITO

        //--------------------CASTING EXPLICITO--------------------
        $num1="5";
        $num1=(int)$num1;

    ?>


	
    

	</body>
</html>