<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $Calcular = $_POST["Calcular"];
        
        function suma($num1, $num2) {return $num1 + $num2;}
        function resta($num1, $num2) {return $num1 - $num2;}
        function multiplicacion($num1, $num2) {return $num1 * $num2;}
        function division($num1, $num2) 
        {if ($num2 == 0) {return "Usted tiene un erro, no se puede dividir entre 0 ";}
        else {return $num1 / $num2;}
    }
        if (is_numeric($num1) && is_numeric($num2)) 
        {
            switch ($Calcular) {
                case "suma":
                    $resultado = suma($num1, $num2);
                    break;
                case "resta":
                    $resultado = resta($num1, $num2);
                    break;
                case "multiplicacion":
                    $resultado = multiplicacion($num1, $num2);
                    break;
                case "division":
                    $resultado = division($num1, $num2);
                    break;
                default:
                    $resultado = "Operación no válida.";
                    break;
            }

            // Mostrar el resultado
            echo "Resultado de $Calcular de $num1 y $num2 es: $resultado";
        } else {
            echo "Error: Por favor ingrese números válidos.";
        }
    }
    ?>