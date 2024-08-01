<?php
   
    $proverbios = [
        "La mayor gloria no e snunca caer, sino levantarse siempre.",
        "Un viaje de mil millas comienza con el primer paso.",
        "un caballo ciego siempre se asusta a sí mismo.",
        "Cava el pozo antes de tener sed.",
        "Cuanto más larga es la cuerda, más alto volará la cometa.",
        "Una conversación única con un sabio vale tanto como un mes estudiando libros.",
        "Pregunta al hombre con experiencia, no al hombre con estudios.",
        "Aprender sin pensar es inútil. Pensar sin aprender, peligroso.",
        "Si no quieres que se sepa, no lo hagas.",
        "Las grandes almas tienen voluntades; las débiles tan solo deseos."
    ];

    $proverbioAleatorio = $proverbios[array_rand($proverbios)];
    
    
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MAF - JUN, 2024 - Página de inicio de mi página web que alberga, generador de números aleatorios para la loteria, recetas de cocina y libros leidos en 2024 -->
    <title>Página de Bienvenida</title>
    <link rel="stylesheet" href="\home\assets\style.css">
</head>
<body>
<br><img src="assets/libro.png" alt="libro lotto" width="200" height="200">    
<h1>Bienvenido a nuestro sitio web</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit elementum taciti 
    mattis litora ridiculus, nisl vel duis laoreet quis interdum massa aptent 
    venenatis nibh. Aliquam sem conubia ac vehicula orci risus ante, porta 
    primis suscipit dis donec diam, consequat vulputate lacus aptent torquent 
    dui. Sociosqu id facilisi lacinia nullam fringilla vulputate lacus augue 
    tristique sed, ornare commodo penatibus egestas massa integer porta felis 
    orci, metus euismod varius non eget quis suspendisse aliquet aptent.</p>
    <div class="proverbio">
    <h3><i>Proverbio Chino:</i></h3>
    <?php echo "<p style='font-style: italic;'>$proverbioAleatorio </p>" ?>
    </div>
<a href="loto/menu.php" class="button-link">Generador de Lotto</a> 
<a href="libro/index.php" class="button-link">Generador de Listado de libros</a>
<a href="Recetas/recetas.php" class="button-link">Recetas de Cocina</a>

</body>
</html>