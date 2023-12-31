<?php
    require_once __DIR__ . '/../classes/Jugador.php';
    $jugador = new Jugador();
    $jugadores = $jugador->todos();
?>

<main class="main-plantilla">
    <h2>Jugadores</h2>
    <section class="sectionExplicación">
        <p>Haz click en el nombre de tu jugador favorito para poder ver más información de él y poder llevarte ¡tu camiseta!</p>
    </section>
    <section class="sectionJugadores">
        <?php
            foreach($jugadores as $jugador):
        ?>
        <article class="card">
            <div>
                <img src="<?= "images/" . $jugador->getImagenJugador();?>" alt="<?=$jugador->getAltImagenJugador();?>">
            </div>
            <a href="index.php?s=detalle&id=<?=$jugador->getNumeroCamiseta();?>"><h3><?=$jugador->getNombreCompleto();?></h3></a>
            <p><?= $jugador->getResumen();?></p>
        </article>
        <?php
            endforeach;
        ?>
    </section>
</main>