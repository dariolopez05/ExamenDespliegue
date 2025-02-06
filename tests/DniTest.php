<?php
use PHPUnit\Framework\TestCase;
use App\DNI;
class DniTest extends TestCase {
 public function TestgetDNIConLetra()
 {
 $dni = new DNI();
 $resultado = $dni->getDNIConLetra();

 // Verifica que el resultado es un string
 $this->assertIsString($resultado['12345678Z']);

 // Verifica que el resultado contiene un saludo válido
 $this->assertNotEmpty($resultado['12345678Z']);

 }
}