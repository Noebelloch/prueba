<?php
// 1. Crear un array con los días de la semana y mostrar el último elemento usando count()
$diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
echo "El último día de la semana es: " . $diasSemana[count($diasSemana) - 1] . "\n";

// 2. Calcular el área de un círculo con radio de 4 cm
$radio = 4;
define("PI", 3.1416);
$areaCirculo = PI * $radio * $radio;
echo "El área del círculo con radio $radio cm es: " . $areaCirculo . " cm²\n";

// 3. Ordenar un array de 10 números enteros de mayor a menor y de menor a mayor
$numeros = [45, 23, 89, 15, 7, 64, 32, 71, 90, 12];

sort($numeros); // Ordenar de menor a mayor
echo "Array ordenado de menor a mayor: " . implode(", ", $numeros) . "\n";

rsort($numeros); // Ordenar de mayor a menor
echo "Array ordenado de mayor a menor: " . implode(", ", $numeros) . "\n";

// 4. Crear un array asociativo con 3 claves diferentes y mostrar sus valores con una función
$persona = [
    "nombre" => "Juan",
    "edad" => 28,
    "ciudad" => "Madrid"
];

function mostrarArrayAsociativo($array) {
    foreach ($array as $clave => $valor) {
        echo "$clave: $valor\n";
    }
}

echo "Datos de la persona:\n";
mostrarArrayAsociativo($persona);

// 5. Mostrar por pantalla el siguiente array de dimensión 3x3
$tabla = [
    ["Marta", "Delgado", "Pérez"],
    ["Francisco", "Montes", "Prado"],
    ["Jeremías", "García", "Del Amo"]
];

echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
foreach ($tabla as $fila) {
    echo "<tr>";
    foreach ($fila as $celda) {
        echo "<td style='padding: 10px;'>$celda</td>";
    }
    echo "</tr>";
}
echo "</table>";

// 6. Programa un condicional que devuelva el mayor de dos números
$num1 = 24;
$num2 = 17;

if ($num1 > $num2) {
    echo "El mayor número es: $num1\n";
} else {
    echo "El mayor número es: $num2\n";
}
?>