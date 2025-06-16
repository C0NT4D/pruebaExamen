<?php
namespace App;

class DNI {
    public function validar($dni) {
        // Validación sencilla: longitud 9 y última letra mayúscula
        return preg_match('/^[0-9]{8}[A-Z]$/', $dni) === 1;
    }
}
    