<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo 1 Noelia Belloch</title>
</head>
<body>
<h1>Números múltiplos de 3 o 4</h1>
    <?php
    // Establecer un rango de números
    for ($i = 1; $i <= 100; $i++) {
        // Condicional para comprobar si es múltiplo de 3 o 4
        if ($i % 3 == 0 || $i % 4 == 0) {
            echo "<p>$i es múltiplo de " . ($i % 3 == 0 ? "3" : "") . ($i % 3 == 0 && $i % 4 == 0 ? " y " : "") . ($i % 4 == 0 ? "4" : "") . ".</p>";
        }
    }
    ?>
</body>
</html>