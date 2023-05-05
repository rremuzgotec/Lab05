<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $_tarifa = $_POST["tarifa"];
    $_dias = $_POST["dias"];

    $importe_bruto = $_tarifa * $_dias;
    $descuento = $importe_bruto * 0.15;
    $importe_neto = $importe_bruto - $descuento;
    $obsequio = $_dias * 3;

    echo "<h2>Resultados</h2>";
    echo "Importe bruto es: S/.". $importe_bruto . "<br>";
    echo "El descuento es: S/.". $descuento . "<br>";
    echo "El importe neto a pagar es: S/.". $importe_neto . "<br>";
    echo "La cantidad de lapiceros como obsequio es: ". $obsequio . "<br>";

}

?>