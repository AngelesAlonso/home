<?php
// Definimos un array con los datos de los libros, asegurándonos de que cada libro tenga una imagen
$recetas = [
    ['id' => 1, 'receta' => 'Albondigas con salsa', 'ingredientes' => '500 gr Carne picada<br> Un manojo de perejil<br> 3 dientes de ajo<br> 1 huevo<br> Harina de trigo para rebozar las albóndigas<br> 
    500 ml. Caldo de pollo<br> 2 cebollas<br> 50 g. de miga de pan<br> 100 ml. De leche<br> 1 zanahoria<br> 200 ml de vino blanco<br> sal y pimienta al gusto.', 'elaboracion' => 'Pica un diente de ajo y 
    ponlo en un bol con la carne, el huevo, la miga de pan remojada en la leche, una cucharadita de perejil picado y un pellizco de sal. <br><br>Mezcla hasta obtener una masa homogénea. <br>Forma 
    las albóndigas pasándolas por harina y resérvalas. <br>En una sartén con aceite de oliva abundante, fríe las albóndigas hasta que se dore su exterior. <br>Saca y reserva mientras 
    elaboramos la salsa. <br><br>Pica dos dientes de ajo, la zanahoria y las dos cebollas, pochándolos en una sartén a fuego lento. <br>Añade una cucharada de harina y el vino y reduce mientras 
    vas removiendo. <br>Agrega el caldo de pollo o de carne y cocina durante 15 a 20 minutos. <br><br> Tritura la salsa con la batidora y ponla en una cacerola. <br>Mete también las albóndigas 
    y deja que el conjunto cueza durante diez minutos, apaga el fuego y tapa, dejando reposar unos minutos antes de comer. <br><br>Al volver a cocer, la salsa expulsa el aire que le entra 
    con la batidora y recupera su color intenso. <br>Sirve raciones de cuatro o cinco albóndigas por persona, riega con su salsa y sirve el resto en un cuenco para que quien quiera pueda 
    añadirse más.', 'imagen' => 'albondigas.jpg'],

    ['id' => 2, 'receta' => 'Arroz con leche', 'ingredientes' => '1 l. de leche<br> arroz redondo <br>100gr. de azúcar<br> 70 gr. de limón<br> 1 canela en rama<br> 1 canela molida <br>1 cuchara Menta 
    fresca para decorar (opcional)', 'elaboracion' => 'Introducimos la leche en una cacerola amplia y añadimos el arroz y la rama de canela, junto con un par de trozos de la piel del limón. <br><br>Calentamos 
    y, cuando comience a hervir, cocemos el conjunto a fuego suave durante unos 50 minutos. Removemos a menudo para que no se agarre a la base y el arroz suelte lentamente su almidón.<br> <br>A continuación 
    agregamos el azúcar y cocemos durante diez minutos más a la misma temperatura, es decir, a fuego bajo. Continuamos removiendo para ayudar a que el azúcar se disuelva y se incorpore al resto de 
    ingredientes. <br><br>Retiramos la rama de canela y repartimos el arroz con leche en cuencos (o donde lo queramos servir). <br><br> Dejamos que se atempere antes de espolvorear con un poco de canela molida. A la 
    hora de servir decoramos cada cuenco con unas hojas de menta fresca (opcional).', 'imagen' => 'arrozleche.jpg'],
    
    ['id' => 3, 'receta' => 'Tortilla de patatas', 'ingredientes' => '1 pollo limpio entero <br> 1 limón <br> Aceite de oliva virgen extra<br> Pimienta negra molida<br> Cebolleta <br>sal a gusto <br>2 manzanas tipo 
    reineta o similar <br>2 patatas grandes <br>2 dientes de ajo <br> Romero freso <br>Tomillo <br> vino blanco o caldo <br> Perejil', 'elaboracion' => 'Precalenta el horno a 180º con calor arriba y abajo. Terminar
    de limpiar el pollo, dejando que se atempere un poco antes fuera de la nevera, retirando posibles restos de plumas, víscera o exceso de grasa. <br>Emulsionar en un cuenco o bote con tapa el zumo de limón, con 
    dos cucharadas de aceite, una cucharadita de sal y una sucharadita de pimienta negra.<br> Embadurnar bien el pollo con esta mezcla, reservando lo que sobre.<br><br> Lavar y pelar las patatas y las manzana. Retirar
    la parte fea ue puedan tener las cebolletas y las capas más externas y secas de los ajos.<br><br> Cortar las cebolletas en juliana y las patatas y manzanas en rodajas o medias lunas de 1 cm de grosor.<br><br> Pintar
    con aceite una bandeja de horno grande, echar la cebolleta, las patatas y las manzanas y casi todos lo ajos; salpimentar ligeramente y remover bien. Hacer un hueco en el centro y colocar el pollo.<br><br> Introducir 
    en su interior un par de ajos partidos y unas ramitas de romero y tomillo. Regar la fuente con un buen chorro de vino blanco, caldo o agua, más la marinada.<br><br> Asar durante unos 45-55 minutos, removiendo la 
    guarnición a mitad de cocción si hiciera falta, para que no se queme. Dorar al final uno o dos minutos activando el gratinado y subiendo la bandeja de nivel. <br><br> Servir con más romero y tomillo fresco.', 
    'imagen' => 'tortilla.jpg'],
    
    ['id' => 4, 'receta' => 'Pollo al horno', 'ingredientes' => '1 l. de leche<br> arroz redondo <br>100gr. de azúcar<br> 70 gr. de limón<br> 1 canela en rama<br> 1 canela molida <br>1 cuchara Menta 
    fresca para decorar (opcional)', 'elaboracion' => 'Introducimos la leche en una cacerola amplia y añadimos el arroz y la rama de canela, junto con un par de trozos de la piel del limón. <br><br>Calentamos 
    y, cuando comience a hervir, cocemos el conjunto a fuego suave durante unos 50 minutos. Removemos a menudo para que no se agarre a la base y el arroz suelte lentamente su almidón.<br> <br>A continuación 
    agregamos el azúcar y cocemos durante diez minutos más a la misma temperatura, es decir, a fuego bajo. Continuamos removiendo para ayudar a que el azúcar se disuelva y se incorpore al resto de 
    ingredientes. <br><br>Retiramos la rama de canela y repartimos el arroz con leche en cuencos (o donde lo queramos servir). <br><br> Dejamos que se atempere antes de espolvorear con un poco de canela molida. A la 
    hora de servir decoramos cada cuenco con unas hojas de menta fresca (opcional).', 'imagen' => 'pollo.jpg'],
    
    ['id' => 5, 'receta' => 'Croquetas de Queso y Calabacín', 'ingredientes' => '1 calabacín<br> 150 gr. de queso gruyere <br>1 ajo<br> 40 gr. de harina<br> 40 gr. de mantequilla<br> 200 ml. de leche <br>100 gr. de pan rallado<br>
    1 huevo <br>Albahaca, pimienta <br>Aceite y sal', 'elaboracion' => 'Paso 1. Lava, despunta y corta el calabacín en daditos. Pela y pica el ajo. Calienta la mantequilla en una sartén y sofríe ambos un par de minutos. Agrega 
    la harina y dórala ligeramente durante 1 minuto. Vierte la leche caliente y cuece, sin dejar de remover, hasta que espese.
    <br><br>Paso 2. Vierte la preparación en una fuente y deja que se entibie. Añade el queso cortado en daditos, unas hojitas de albahaca lavada y picada y salpimienta, remueve y extiende bien la masa. Déjala reposar durante 4 horas en la nevera.
    <br><br>Paso 3. Forma las croquetas, pásalas por el huevo batido y el pan rallado y fríelas en abundante aceite caliente hasta que se doren. Escúrrelas y sírvelas con un poco más de albahaca.', 'imagen' => 'croqueta.jpg'],
    
    ['id' => 6, 'receta' => 'Patatas rellenas de carne picada con portobellos y queso', 'ingredientes' => '6-8 patatas medianas, dependiendo del tamañoe<br> 200 gr. de carne picada de ternera <br>200gr. de tomate frito<br> 4 champiñones portobello<br> 
    Aceite de oliva <br>Pimienta y sal <br>50 gr. de queso curado <br>1 ramita de tomillo', 'elaboracion' => 'Paso 1. Lava bien las patatas, sécalas y pínchalas varias veces con la punta de un cuchillo. Envuélvelas en film o cúbrelas con una tapa apta para microondas y cuécelas durante 4 minutos.
    <br><br>Paso 2. Dales la vuelta y prosigue la cocción 3-5 minutos, según el tipo de patata y de su tamaño. Retíralas y espera a que se templen.
    <br><br>Paso 3. En una sartén, pon 1 cucharada de aceite y caliéntalo. Añade la carne picada y saltéala un par de minutos, sin dejar de remover para que quede suelta.
    <br><br>Paso 4. Añade el tomate frito, salpimienta al gusto y mezcla.
    <br><br>Paso 5. Limpia los champiñones, lávalos, sécalos y córtalos en láminas finas.
    <br><br>Paso 6. Corta las patatas por la mitad a lo largo; retírales un poco de la pulpa con una cucharita y mézclala con el sofrito de carne y tomate.
    <br><br>Paso 7. Salpimienta el interior de las patatas y rellénalas con la preparación anterior. Reparte por encima las láminas de champiñón y ralla el queso curado sobre ellas.
    <br><br>Paso 8. Precalienta el horno a 180 °C, coloca dentro las patatas y caliéntalas 2 o 3 minutos, hasta que el queso se funda. Decora con el tomillo, lavado y troceado, y sirve.', 'imagen' => 'rellenas.jpg'],
    
    ['id' => 7, 'receta' => 'Arroz con pollo al curry', 'ingredientes' => '800 gr. arroz blanco<br> 2 pechugas de pollo <br>150gr. de champiñones<br> curry en polvo<br> Aceite, sal y pimienta', 
    'elaboracion' => 'IPaso 1. Limpia las pechugas y córtalas en dados, sazónalos y espolvorea con un poco de curry.
    <br><br>Paso 2. Limpia, lava y seca los champiñones. Córtalos en láminas, saltéalos en una sartén con un hilo de aceite durante 2 minutos, salpimiéntalos y retíralos.
    <br><br>Paso 3. Añade el pollo a la sartén, saltéalo durante 5 minutos y retíralo.
    <br><br>Paso 4. Agrega entonces un poco más de aceite y saltea el arroz. Espolvoréalo con curry y remueve. Añade el pollo y los champiñones, mezcla bien y sirve.
    Un consejo: una pequeña cantidad de curry aporta mucho aroma y sabor, así que no te pases. Con 2 cucharaditas bastará.', 'imagen' => 'arroz.jpg'],
    
    ['id' => 8, 'receta' => 'Brocheta de pollo, mango y panceta', 'ingredientes' => '500 gr. de pechuga de pollo<br> 2 mangos maduros <br>200gr. de panceta en un trozo<br> Aceite<br> Pimienta y sal<br>', 
    'elaboracion' => 'Paso 1. Trocea las pechugas de pollo a dados de unos 2 cm. Pela y corta el mango a dados como el pollo. Finalmente, corta la panceta a dados de 1 cm.
    <br><br>Paso 2. En una brocheta, ensarte un trozo de pollo, uno de mango, y uno de panceta. Repite la operación hasta completar la brocheta y salpimienta.
    <br><br>Paso 3. En una plancha caliente a fuego medio, fríe las brochetas con una cucharada de aceite. Cocina hasta que se doren uniformemente por todos sus lados.', 'imagen' => 'pincho.jpg'],
    
    ['id' => 9, 'receta' => 'Lubina a la plancha con miel y mostaza', 'ingredientes' => '600 gr. de filetes de lubina<br> 1 cucharada de mostaza de Dijon <br>2 cucharadas de miel<br> 1 limón<br> 200 gr. de canónigos o berros<br> 1 remolacha cocida<br> Aceite de oliva y sal<br>', 
    'elaboracion' => 'Paso 1. Prepara el adobo mezclando la miel, la mostaza y un poco del zumo del limón. Lava la lubina y pincélala con parte de esta preparación. Reserva el resto.
    <br><br>Paso 2. Trocea la remolacha. Lava los canónigos y condiméntalos con sal, 3 cucharadas de aceite y 1 cucharada del zumo de limón.
    <br><br>Paso 3. Calienta una plancha y pincélala con 1 cucharadita de aceite. Asa el pescado un par de minutos, dale la vuelta y vuelve a pincelarlo con un poco de la mezcla de miel y mostaza. Prosigue la cocción 2 minutos más.
    <br><br>Paso 4. Riega los filetes con el resto del adobo, espolvoréalos con el perejil y sírvelos acompañados de la ensalada de canónigos y remolacha. ¡Y listo!
    <br><br>El truco: añade al adobo medio mango picado o triturado y 1 cucharadita de jengibre en polvo.', 'imagen' => 'lubina.jpg'],
    
    ['id' => 10, 'receta' => 'Huevos rellenos con aceitunas y atún', 'ingredientes' => '6 huevos<br> 6 cucharadas de mahonesa <br>3 cucharadas de mostaza<br> 4 filetes de anchoa<br> 50 gr. de aceitunas verdes deshuesadas<br> 100 gr. de atún desmigado<br> Aceite de oliva y sal<br> Perejil picado<br> una pizca de pimentón<br>', 
    'elaboracion' => 'Paso 1. Cuece los huevos en agua salada durante 10 minutos. Escúrrelos y enfríalos.
    <br><br>Paso 2. Pica las aceitunas y el atún. Mézclalas con el aceite y un poco de perejil.
    <br><br>Paso 3. Pela los huevos, córtalos por la mitad y retira las yemas. Aplástalas y añade la mostaza y la mahonesa. Remueve bien.
    <br><br>Paso 4. Coloca los huevos en una fuente grande y rellénalos con la mezcla de yemas preparada. Decóralos con el picadillo de aceitunas y anchoas y sírvelos espolvoreados con el pimentón.
    <br><br>El truco: en lugar de atún, añade al picadillo unos mejillones en escabeche o unas sardinillas en aceite.', 'imagen' => 'huevos.jpg'],
   
];

$id = $_GET['id'] ?? null;

function mostrarRecetas($recetas) {
    echo "<h1>Listado de Recetas</h1><table border='0'><thead><tr><th>Recetas</th></tr></thead><tbody>";
    foreach ($recetas as $receta) {
        echo "<tr><td><a href='?id={$receta['id']}'>{$receta['receta']}</a></td></tr>";
    }
    echo "</tbody></table>";
}

function mostrarDetalleReceta($recetas, $id) {
    foreach ($recetas as $receta) {
        if ($receta['id'] == $id) {
            echo "<div class='container'>";
            if (isset($receta['imagen'])) {
                $imagePath = "../assets/{$receta['imagen']}";
                if (file_exists($imagePath)) {
                    echo "<br><img src='{$imagePath}' alt='Imagen de {$receta['receta']}' style='width:150px; height:auto;'>";
                    echo "<h1>{$receta['receta']}</h1>";
                } 
            }
            echo  "<p><strong>Ingredientes:</strong> <br><br>{$receta['ingredientes']}<br></p>
                  <p><strong>Elaboración:</strong> <br><br>{$receta['elaboracion']}</p>
                  <a href='recetas.php' class='button-link'>Volver al listado</a>
                  </div>";
            return;
        }
    }}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="\home\assets\style.css">
    <!-- MAF - JUN, 2024 - Página web de Recetas de cocina de MAF -->
    <title>Recetas de cocina</title>

</head>
<body>
    <?php
    if ($id) {
        mostrarDetalleReceta($recetas, $id);
    } else {
        mostrarRecetas($recetas);
        echo '<br><a href="/home/index.php" class="button-link">Volver al Inicio</a>';
    }
    ?>