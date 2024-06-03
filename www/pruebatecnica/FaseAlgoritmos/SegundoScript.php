<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Amortización</title>
</head>
<body>
    <h1>Tabla de amortizaciones de prestamos</h1>
    
    <form action="" method="post">
        
        <label for="monto">Monto del préstamo:</label>
        <input type="number" name="monto" id="monto" required><br>

        <label for="plazo">Plazo en meses:</label>
        <input type="number" name="plazo" id="plazo" required><br>

        <label for="tasa">Tasa de interés mensual (%):</label>
        <input type="number" step="0.001" name="tasa" id="tasa" required><br>

        <button type="submit">Generar amoritzación</button>
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = $_POST["monto"];
        $plazo = $_POST["plazo"];
        $tasa = $_POST["tasa"] / 100; 

        echo "<h1>Tabla de calculo de amortización</h1>";
        echo "<table border='1'>
                <tr>
                    <th>Período</th>
                    <th>Saldo</th>
                    <th>Interés</th>
                    <th>Abono</th>
                    <th>Pago</th>
                </tr>";

        $saldo = $monto; // Inicializar en monto
        
        for ($i = 1; $i <= $plazo; $i++) {
            $interes = $saldo * $tasa;
            $abono_capital = $monto / $plazo;
            $pago_total = $interes + $abono_capital;

            echo "<tr>
                    <td>$i</td>
                    <td>" . number_format($saldo, 2) . "</td>
                    <td>" . number_format($interes, 2) . "</td>
                    <td>" . number_format($abono_capital, 2) . "</td>
                    <td>" . number_format($pago_total, 2) . "</td>
                  </tr>";

            $saldo -= $abono_capital; // Actualiza saldo
        }

        echo "</table>";
    }
    ?>
</body>
</html>
