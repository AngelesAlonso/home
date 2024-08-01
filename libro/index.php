<?php
// Definimos un array con los datos de los libros, asegurándonos de que cada libro tenga una imagen
$libros = [
    ['id' => 1, 'titulo' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez', 'ejemplares' => 50, 'genero' => 'Novela', 'imagen' => 'cien-anos.jpg'],
    ['id' => 2, 'titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'ejemplares' => 42, 'genero' => 'Novela', 'imagen' => 'don-quijote.jpg'],
    ['id' => 3, 'titulo' => 'La sombra del viento', 'autor' => 'Carlos Ruiz Zafón', 'ejemplares' => 20, 'genero' => 'Novela misterio', 'imagen' => 'la-sombra-del-viento.jpg'],
    ['id' => 4, 'titulo' => '1984', 'autor' => 'George Orwell', 'ejemplares' => 30, 'genero' => 'Ficción distópica', 'imagen' => '1984.jpg'],
    ['id' => 5, 'titulo' => 'El señor de los anillos', 'autor' => 'J.R.R. Tolkien', 'ejemplares' => 50, 'genero' => 'Fantasía', 'imagen' => 'el-senor-de-los-anillos.jpg'],
    ['id' => 6, 'titulo' => 'El alquimista', 'autor' => 'Paulo Coelho', 'ejemplares' => 40, 'genero' => 'Ficción filosófica', 'imagen' => 'el-alquimista.jpg'],
    ['id' => 7, 'titulo' => 'Matar a un ruiseñor', 'autor' => 'Harper Lee', 'ejemplares' => 35, 'genero' => 'Drama', 'imagen' => 'matar-a-un-ruisenor.jpg'],
    ['id' => 8, 'titulo' => 'Orgullo y prejuicio', 'autor' => 'Jane Austen', 'ejemplares' => 30, 'genero' => 'Novela de costumbres', 'imagen' => 'orgullo-y-prejuicio.jpg'],
    ['id' => 9, 'titulo' => 'Crimen y castigo', 'autor' => 'Fiodor Dostoievski', 'ejemplares' => 25, 'genero' => 'Filosófica', 'imagen' => 'crimen-y-castigo.jpg'],
    ['id' => 10, 'titulo' => 'El gran Gatsby', 'autor' => 'F. Scott Fitzgerald', 'ejemplares' => 28, 'genero' => 'Novela', 'imagen' => 'el-gran-gatsby.jpg'],
    ['id' => 11, 'titulo' => 'En busca del templo perdido', 'autor' => 'Autor desconocido', 'ejemplares' => 15, 'genero' => 'Aventura', 'imagen' => 'en-busca-del-templo-perdido.jpg'],
    ['id' => 12, 'titulo' => 'Cumbres borrascosas', 'autor' => 'Emily Brontë', 'ejemplares' => 18, 'genero' => 'Drama', 'imagen' => 'cumbres-borrascosas.jpg'],
    ['id' => 13, 'titulo' => 'Los miserables', 'autor' => 'Victor Hugo', 'ejemplares' => 40, 'genero' => 'Drama histórico', 'imagen' => 'los-miserables.jpg'],
    ['id' => 14, 'titulo' => 'Ulises', 'autor' => 'James Joyce', 'ejemplares' => 22, 'genero' => 'Novela modernista', 'imagen' => 'ulises.jpg'],
    ['id' => 15, 'titulo' => 'El retrato de Dorian Gray', 'autor' => 'Oscar Wilde', 'ejemplares' => 20, 'genero' => 'Novela gótica', 'imagen' => 'el-retrato-de-dorian-gray.jpg'],
];

$id = $_GET['id'] ?? null;

function mostrarLibros($libros) {
    echo "<h1>Listado de Libros</h1><table border='1'><thead><tr><th>Título</th><th>Autor</th><th>Ejemplares</th><th>Género</th></tr></thead><tbody>";
    foreach ($libros as $libro) {
        echo "<tr><td><a href='?id={$libro['id']}'>{$libro['titulo']}</a></td><td>{$libro['autor']}</td><td>{$libro['ejemplares']}</td><td>{$libro['genero']}</td></tr>";
    }
    echo "</tbody></table>";
}

function mostrarDetalleLibro($libros, $id) {
    foreach ($libros as $libro) {
        if ($libro['id'] == $id) {
            
            if (isset($libro['imagen'])) {
                $imagePath = "../assets/{$libro['imagen']}";
                if (file_exists($imagePath)) {
                    echo "<br><img src='{$imagePath}' alt='Portada de {$libro['titulo']}' style='width:150px; height:auto;'>";
                    echo "<h1>{$libro['titulo']}</h1>";
                } 
            }
            echo "<p><strong>Título:</strong> {$libro['titulo']}</p>
                  <p><strong>Autor:</strong> {$libro['autor']}</p>
                  <p><strong>Ejemplares:</strong> {$libro['ejemplares']}</p>
                  <p><strong>Género:</strong> {$libro['genero']}</p>
                  <a href='index.php' class='button-link'>Volver al listado</a>";
            return;
        }
    }}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="\home\assets\style.css">
    <!-- MAF - JUN, 2024 - Página de todos los libros leidos en el 2024 -->
    <title>Libros leidos en 2024</title>

</head>
<body>
    <?php
    if ($id) {
        mostrarDetalleLibro($libros, $id);
    } else {
        mostrarLibros($libros);
        echo '<br><a href="/home/index.php" class="button-link">Volver al Inicio</a>';
    }
    ?>
    


</body>
</html>
