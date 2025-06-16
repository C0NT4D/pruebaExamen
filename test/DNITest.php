<?php
use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase {
    public function testValidarDNI() {
        $dni = new DNI();
        $this->assertTrue($dni->validar('12345678Z'));
        $this->assertFalse($dni->validar('1234'));
    }
}
