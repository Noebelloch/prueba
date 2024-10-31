<?php

// 1. Un bucle while que cuente desde 60 hasta 45 y lo muestre por pantalla.
$contador = 60;
while ($contador >= 45) {
    echo $contador . "<br>";
    $contador--;
}

// 2. Un bucle while que a partir de una variable $contador que toma valores de 1 a 5,
// muestre por pantalla el doble del valor de $contador.
$contador = 1;
while ($contador <= 5) {
    echo "El doble de $contador es " . ($contador * 2) . "<br>";
    $contador++;
}

// 3. Un bucle for que cuente desde 60 hasta 45 y lo muestre por pantalla.
for ($i = 60; $i >= 45; $i--) {
    echo $i . "<br>";
}

// 4. Un bucle for que a partir de una variable $contador que toma valores de 1 a 5,
// muestre por pantalla el doble del valor de $contador y lo muestre por pantalla.
for ($contador = 1; $contador <= 5; $contador++) {
    echo "El doble de $contador es " . ($contador * 2) . "<br>";
}

// 5. Un bucle for que cuente desde 10 hasta 200 de 10 en 10 y lo muestre por pantalla.
for ($i = 10; $i <= 200; $i += 10) {
    echo $i . "<br>";
}

// 6. Una función con un condicional que compare 3 números y devuelva por pantalla el menor de los tres.
function menorDeTres($a, $b, $c) {
    if ($a <= $b && $a <= $c) {
        return $a;
    } elseif ($b <= $a && $b <= $c) {
        return $b;
    } else {
        return $c;
    }
}
echo "El menor de 3, 7 y 5 es: " . menorDeTres(3, 7, 5) . "<br>";

// 7. Una función que permita calcular el beneficio de un comercial una vez aplicado el bonus.
function calcularBeneficio($ventas) {
    if ($ventas <= 1000) {
        $bonus = 0;
    } elseif ($ventas <= 2000) {
        $bonus = 5;
    } elseif ($ventas <= 3000) {
        $bonus = 10;
    } else {
        $bonus = 15;
    }
    return $ventas + ($ventas * $bonus / 100);
}
echo "El beneficio con ventas de 2500€ es: " . calcularBeneficio(2500) . "€<br>";

// 8. Una función que devuelva un número entero dependiendo de la letra introducida al algoritmo.
function letraANumero($letra) {
    switch (strtoupper($letra)) {
        case 'A':
            return 1;
        case 'B':
            return 2;
        case 'C':
            return 3;
        default:
            return 0;
    }
}
echo "La letra 'A' corresponde al número: " . letraANumero('A') . "<br>";

// 9. Un algoritmo que muestre los 10 primeros términos de la serie de Fibonacci.
function fibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    echo "<br>";
}
echo "Los 10 primeros términos de Fibonacci: ";
fibonacci(10);

// 10. Un algoritmo que realice la sumatoria de todos los números comprendidos entre el 0 y el 10.
$sumatoria = 0;
for ($i = 0; $i <= 10; $i++) {
    $sumatoria += $i;
}
echo "La sumatoria de los números entre 0 y 10 es: " . $sumatoria . "<br>";

// 11. Un script que compare los siguientes arrays, encuentre y muestre por pantalla los elementos en común.
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$comunes = array_intersect($array1, $array2);
echo "Elementos comunes en los arrays: " . implode(", ", $comunes) . "<br>";

// 12. Un algoritmo que escriba por pantalla “Todo OK” hasta que un contador llegue a 10.
$contador = 0;
while ($contador < 10) {
    echo "Todo OK<br>";
    $contador++;
}

// 13. Una función que opere dos números dependiendo del operador escogido.
function operar($a, $b, $operador) {
    switch ($operador) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $b != 0 ? $a / $b : "División por cero";
        default:
            return "Operador no válido";
    }
}
echo "Resultado de 10 + 5: " . operar(10, 5, '+') . "<br>";

// 14. Inventa una función usando un switch.
function diasDeLaSemana($dia) {
    switch ($dia) {
        case 1:
            return "Lunes";
        case 2:
            return "Martes";
        case 3:
            return "Miércoles";
        case 4:
            return "Jueves";
        case 5:
            return "Viernes";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return "Día no válido";
    }
}
echo "El día 3 es: " . diasDeLaSemana(3) . "<br>";

?>