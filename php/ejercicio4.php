<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $importe = $precio * $cantidad;
    $desc1 = $importe * 0.05;
    $importe_1er_desc = $importe - $desc1;
    $desc2 = $importe_1er_desc * 0.05;
    $importe_pag = $importe_1er_desc - $desc2;

    echo "<h2>Resultados:</h2>";
    echo "El importe de la compra es: S/. " . $importe . "<br>";
    echo "El descuento total de la compra es: S/. ". ($desc1 + $desc2) . "<br>";
    echo "El importe a pagar es: S/. ". $importe_pag . "<br>";
    
}

?>