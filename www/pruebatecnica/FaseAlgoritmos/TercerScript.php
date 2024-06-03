<!DOCTYPE html>
<html>
<head>
    <title>Potencia de binomio (a + b)^n</title>
</head>
<body>
    
    <h2>Potencia de binomio de (a + b)^n</h2>
    
    <form method="post">
        <label for="potencia">Ingrese la potencia para elevar el binomio (a + b): </label><br/>
        <input type="number" id="potencia" name="potencia" min="0" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    
    // Calculo del coeficiente binomial   
    function coeficienteBi($n, $k) {
        if ($k == 0 || $k == $n) {
            return 1;
        } else {
            return coeficienteBi($n - 1, $k - 1) + coeficienteBi($n - 1, $k);
        }
    }

    // Calculo de expansion
    function expansionBi($n) {
        $expansion = "Expansión de (a + b)^$n:<br>";
        for ($i = 0; $i <= $n; $i++) {
            $coeficiente = coeficienteBi($n, $i);
            $potencia_a = $n - $i;
            $potencia_b = $i;

            if ($i > 0) {
                $expansion .= " + ";
            }

            $expansion .= "$coeficiente" . "a^$potencia_a";

            if ($potencia_b > 0) {
                $expansion .= "b^$potencia_b";
            }
        }
        return $expansion;
    }

    // Verificar la potencia
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['potencia'])) {
           
            $potencia = intval($_POST['potencia']);

            // Resultado
            $resultado_expansion = expansionBi($potencia);
            echo "<h2>$resultado_expansion<h2>";
        } else {
 
            echo "<p>Ingresar el valor de la potencia</p>";
        }
    }
    ?>

</body>
</html>
