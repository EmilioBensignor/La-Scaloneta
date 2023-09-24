<?php

class Jugador
{
    protected int $numero_camiseta = 0;
    protected string $nombre_completo = "";
    protected string $resumen = "";
    protected string $descripcion = "";
    protected string $imagen_jugador = "";
    protected string $alt_imagen_jugador = "";
    protected string $imagen_camiseta = "";
    protected string $alt_imagen_camiseta = "";

    public function todos() : array {
        $rutaJugadores = __DIR__ . '/../data/jugadores.json';
        $registros = json_decode(file_get_contents($rutaJugadores), true);
        $salida = [];

        foreach($registros as $registo) {
            $jugador = new Jugador;
            $jugador->setNumeroCamiseta($registo['numero_camiseta']);
            $jugador->setNombreCompleto($registo['nombre_completo']);
            $jugador->setResumen($registo['resumen']);
            $jugador->setDescripcion($registo['descripcion']);
            $jugador->setImagenJugador($registo['imagen_jugador']);
            $jugador->setAltImagenJugador($registo['alt_imagen_jugador']);
            $jugador->setImagenCamiseta($registo['imagen_camiseta']);
            $jugador->setAltImagenCamiseta($registo['alt_imagen_camiseta']);

            $salida[] = $jugador;
        }
        return $salida;
    }
    public function porNumeroCamiseta(int $numero_camiseta) : Jugador {
        $jugadores = $this->todos();

        foreach($jugadores as $jugador) {
            if ($jugador->getNumeroCamiseta() === $numero_camiseta) {
                return $jugador;
            }
        }
    }

    /* Getter y Setters */

    public function getNumeroCamiseta(): int {
        return $this->numero_camiseta;
    }
    public function setNumeroCamiseta(int $numero_camiseta): void {
        $this->numero_camiseta = $numero_camiseta;
    }

    public function getNombreCompleto(): string {
        return $this->nombre_completo;
    }
    public function setNombreCompleto(string $nombre_completo): void {
        $this->nombre_completo = $nombre_completo;
    }

    public function getResumen(): string {
        return $this->resumen;
    }
    public function setResumen(string $resumen): void {
        $this->resumen = $resumen;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }
    public function setDescripcion(string $descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function getImagenJugador(): string {
        return $this->imagen_jugador;
    }
    public function setImagenJugador(string $imagen_jugador): void {
        $this->imagen_jugador = $imagen_jugador;
    }

    public function getAltImagenJugador(): string {
        return $this->alt_imagen_jugador;
    }
    public function setAltImagenJugador(string $alt_imagen_jugador): void {
        $this->alt_imagen_jugador = $alt_imagen_jugador;
    }

    public function getImagenCamiseta(): string {
        return $this->imagen_camiseta;
    }
    public function setImagenCamiseta(string $imagen_camiseta): void {
        $this->imagen_camiseta = $imagen_camiseta;
    }

    public function getAltImagenCamiseta(): string {
        return $this->alt_imagen_camiseta;
    }
    public function setAltImagenCamiseta(string $alt_imagen_camiseta): void {
        $this->alt_imagen_camiseta = $alt_imagen_camiseta;
    }
}

?>