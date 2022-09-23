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
        <p>&nbsp</p>
            <form action="" name="form1" method="post">
                <p>
                <label for="num1">Número 1</label>
                <input type="text" name="num1" id="num1">
                <label for="num2">Número 2</label>
                <input type="text" name="num2" id="num2">
                <label for="operacion"></label>
                <select name="operacion" id="operacion">
                    <option>Suma</option>
                    <option>Resta</option>
                    <option>Multiplicación</option>
                    <option>División</option>
                    <option>Módulo</option>
                </select>
                </p>
                <p>
                    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
                </p>
        </form>
        <p>&nbsp</p>

    <?php

        if (isset($_POST["button"])) {
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            $resultado=0;
            
            if(!strcmp("Suma",$operacion)){
                echo "El resultado de la suma es: " . ($numero1+$numero2);
            } 
            if(!strcmp("Resta",$operacion)){
                echo "El resultado de la suma es: " . ($numero1-$numero2);
            } 
            if(!strcmp("Multiplicación",$operacion)){
                echo "El resultado de la suma es: " . ($numero1*$numero2);
            } 
            if(!strcmp("División",$operacion)){
                echo "El resultado de la suma es: " . ($numero1/$numero2);
            } 
            if(!strcmp("Módulo",$operacion)){
                echo "El resultado de la suma es: " . ($numero1%$numero2);
            } 
            
        }

           
    ?>


	
    

	</body>
</html>