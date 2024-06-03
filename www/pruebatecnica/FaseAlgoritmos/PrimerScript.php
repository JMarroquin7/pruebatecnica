<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el Factorial</title>
</head>

<body>
    <h1>Calcular el factorial</h1>
    <form action="" method="post">
        <label for="numero">Ingrese el número a calcular:</label>
        <br/>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular el factorial</button>
        <br/>
    </form>
    <?php
    
    // Verificación de datos en formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Recoger el número ingresado
        $numero = isset($_POST["numero"]) ? intval($_POST["numero"]) : 0;

        function factor($n) {
            
            // Operación para el factorial 
            $factor = 1;
            $operacion = "$n! = ";

            // Calcular el factorial
            
            for ($i = $n; $i >= 1; $i--) {
                $factor *= $i;
                $operacion .= $i == 1 ? $i : "$i * ";
            }
            
            return ["factor" => $factor, "operacion" => $operacion];
        }

        $resultado = factor($numero);
        
        //Resultado
        
        echo'La respuesta es:';
        echo "<p>{$resultado['operacion']} = {$resultado['factor']}</p>";
    }
    ?>
</body>
</html>
