<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $p_actual = $_POST["precio"];
    $num_gaseosas = $_POST["num_gaseosas"];

    $nuevo_p = $p_actual * 0.95;
    $importe = $nuevo_p * $num_gaseosas;
    $descuento = $importe * 0.07;
    $importe_pagar = $importe - $descuento;
    $regalo = $num_gaseosas * 2;

    echo "<h2>Resultados:</h2>";
    echo "Nuevo precio de la gaseosa: S/.".  $nuevo_p . "<br>";
    echo "Importe: S/.". $importe . "<br>";
    echo "Descuento: S/.". $descuento . "<br>";
    echo "Importe a pagar: S/.". $importe_pagar . "<br>";
    echo "Regalo: ". $regalo . " caramelos <br>";
}

?>