<?php
function generarNumeros($cantidad, $maximo){
    $numeros = range(1, $maximo);
    shuffle($numeros);
    $numerosSeleccionados = array_slice($numeros, 0, $cantidad);
    sort($numerosSeleccionados); 
    return $numerosSeleccionados;
}

$pais = $_GET['pais'] ?? 'espana';

switch ($pais){
    case 'espana':
    case 'alemania':
        $numeros = generarNumeros(6, 49);
        break;
    case 'francia':
        $numeros = generarNumeros(5, 49);
        break;
    case 'italia':
        $numeros = generarNumeros(6, 90);
        break;
    default:
        $numeros = generarNumeros(6, 49);
        break;
}

$numerosMostrar = implode(", ", $numeros);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MAF - JUN, 2024 - Generador de números de Loteria aleatorio con orden decreciente -->
    <link rel="stylesheet" href="\home\assets\style.css">
    <title>Generador de números de Loteria de <?php echo $pais; ?></title>
</head>
<body>
    <h1>Lotto de <?php echo $pais; ?></h1>
    <p class="proverbio">Números generados: <?php echo $numerosMostrar; ?></p>
    <a href="menu.php" class="button-link">Volver a Generador de Lotto</a>
</body>
</html>
