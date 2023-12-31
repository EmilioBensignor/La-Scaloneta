<?php
// Inicia la página en el home porque no se pasa una URL
$ruta = $_GET['s'] ?? 'home';

$arrayRutas = [
    'home' => [
        'titulo' => 'La Scaloneta',
    ],
    'plantilla' => [
        'titulo' => 'Plantel',
    ],
    'detalle' => [
        'titulo' => 'Elige tu camiseta',
    ],
    'contacto' => [
        'titulo' => 'Subite a la Scaloneta',
    ],
    'gracias' => [
        'titulo' => 'Gracias',
    ],
    '404' => [
        'titulo' => 'Página no encontrada',
    ],
];

if (!isset($arrayRutas[$ruta])) {
    $ruta = '404';
};

$configurarRuta = $arrayRutas[$ruta];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$configurarRuta['titulo'];?> | Argentina Campeón</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="headerSuperior">
            <div class="divLogo">
                <img src="images/logoArg.png" alt="escudo-argentina">
            </div>
            <h1>
                La Scaloneta
            </h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?s=home">Home</a></li>
                <li><a href="index.php?s=plantilla">Plantel</a></li>
                <li><a href="index.php?s=contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <?php
    require __DIR__ . '/vistas/' . $ruta . '.php';
    ?>
    <footer>
        <p>Lara Crupnicoff - Da Vinci - 2023</p>
    </footer>
</body>
</html>