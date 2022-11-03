<style>

	.resultado{
		color: red;
		font-weight: bold;
		font-size: 32px;
	}

</style>


<?php

        
            
		function calcular($calculo, $numero1, $numero2) {
            if(!strcmp("Suma",$calculo)){
				$resultado = $numero1+$numero2;
                echo "<p class='resultado'>El resultado de la suma es: $resultado</p>"; 
            } 
            if(!strcmp("Resta",$calculo)){
				$resultado = $numero1-$numero2;
                echo "<p class='resultado'>El resultado de la resta es: $resultado</p>"; 
            } 
            if(!strcmp("Multiplicación",$calculo)){
				$resultado = $numero1*$numero2;
                echo "<p class='resultado'>El resultado de la multiplicación es: $resultado</p>"; 
            } 
            if(!strcmp("División",$calculo)){
				$resultado = $numero1/$numero2;
                echo "<p class='resultado'>El resultado de la división es: $resultado</p>"; 
            } 
            if(!strcmp("Módulo",$calculo)){
				$resultado = $numero1%$numero2;
                echo "<p class='resultado'>El resultado del resto es: $resultado</p>"; 
            } 
            if(!strcmp("Incremento",$calculo)){
                $numero1++;
				$resultado = $numero1;
                echo "<p class='resultado'>El resultado del incremento es: $resultado</p>"; 
            } 
            if(!strcmp("Decremento",$calculo)){
                $numero1--;
				$resultado = $numero1;
                echo "<p class='resultado'>El resultado del decremento es: $resultado</p>"; 
            } 

            
        }

           
    ?>