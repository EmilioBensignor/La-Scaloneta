<?php
    require_once __DIR__ . '/../classes/Jugador.php';
    $jugador = new Jugador();
    $jugador = $jugador->porNumeroCamiseta($_GET['id']);
?>
<main class="mainDetalle">
    <h2><?=$jugador->getNombreCompleto();?></h2>
    <section class="sectionDescripcion">
        <div>
            <img src="<?="images/" . $jugador->getImagenJugador();?>" alt="<?=$jugador->getAltImagenJugador();?>">
        </div>
        <div>
            <p><?=$jugador->getDescripcion();?></p>
        </div>
    </section>
    <section class="sectionCamiseta">
        <p>¿Querés llevarte la camiseta de <?=$jugador->getNombreCompleto();?>? ¡Próximamente en otro parcial podrás comprarla!</p>
        <div>
            <img src="<?="images/" . $jugador->getImagenCamiseta();?>" alt="<?=$jugador->getAltImagenCamiseta();?>">
        </div>
    </section>
</main>