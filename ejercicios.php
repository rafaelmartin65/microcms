<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicos</title>
</head>

<body>
    <!-- Suma de los 1.000 primeros números -->
    <?php
    $suma = 0;

    for ($i = 1; $i <= 1000; $i++) {
        $suma += $i;
    }

    echo "La suma de los primeros 1000 números enteros es: $suma";
    ?>

    <?php
    $suma_pares = 0;
    $producto_impares = 1;
    $pares_contados = 0;
    $impares_contados = 0;

    for ($i = 1; $pares_contados < 20 || $impares_contados < 20; $i++) {
        if ($i % 2 == 0 && $pares_contados < 20) {
            $suma_pares += $i;
            $pares_contados++;
        } elseif ($i % 2 != 0 && $impares_contados < 20) {
            $producto_impares *= $i;
            $impares_contados++;
        }
    }

    echo "La suma de los primeros 20 números pares es: $suma_pares<br>";
    echo "El producto de los primeros 20 números impares es: $producto_impares";
    ?>

</body>

</html>