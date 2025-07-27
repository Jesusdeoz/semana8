<?php
class Evento {
    public $descripcion;
    public $tipo;
    public $lugar;
    public $fecha;
    public $hora;

    public function __construct($descripcion, $tipo, $lugar, $fecha, $hora) {
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
        $this->lugar = $lugar;
        $this->fecha = $fecha;
        $this->hora = $hora;
    }

    public function mostrarEvento() {
        return "<strong>$this->descripcion</strong><br>
                Tipo: $this->tipo<br>
                Lugar: $this->lugar<br>
                Fecha: $this->fecha<br>
                Hora: $this->hora<br>";
    }

    public static function filtrarEventos($eventos, $tipoBuscado) {
        $filtrados = [];
        foreach ($eventos as $evento) {
            if ($evento->tipo == $tipoBuscado) {
                $filtrados[] = $evento;
            }
        }
        return $filtrados;
    }
}
?>
