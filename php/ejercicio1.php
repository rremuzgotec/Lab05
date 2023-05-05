
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $importe = $_POST["importe"];
    $hijos = $_POST["hijos"];

    $bonificacion = $hijos * 50;
    $comision = $importe * 0.075;
    $sueldo_basico = 600;
    $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
    $descuento = $sueldo_bruto * 0.11;
    $sueldo_neto = $sueldo_bruto - $descuento;

    echo "<h2>Resultado:</h2>";
    echo "Bonificación: S/.", $bonificacion, "<br>";
    echo "Comisión: S/.", $comision, "<br>";
    echo "Sueldo bruto: S/.", $sueldo_bruto, "<br>";
    echo "Descuento: S/.", $descuento, "<br>";
    echo "Sueldo neto: S/.", $sueldo_neto;
}

?>