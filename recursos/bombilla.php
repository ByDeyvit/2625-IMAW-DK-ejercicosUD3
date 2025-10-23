<?php   
    class Bombilla {
        private bool $encendida;
        public function __construct() {
            $this->encendida = false;
        }
        public function getEncendida(): bool {
            return $this->encendida;
        }
        public function encender(): void {
            $this->encendida = true;
            echo "La Bombilla está ahora encendida.<br>";
        }
        public function apagar(): void {
            $this->encendida = false;
            echo "La Bombilla está ahora apagada.<br>";
        }
    }
?>