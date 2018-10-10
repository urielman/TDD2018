<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }

	public function testCortable(){
		$mazo = new Mazo;
		$this->assertTrue($mazo->cortar());
	}

	public function testCantidadDeCartas(){
		$mazo = new Mazo;
		$this->assertEquals($mazo->cantidadDeCartas(), 50);
	}
 
/*
	public function testObtenerCartaDelMazo(){
		$mazo = new Mazo;
		$carta = $mazo->obtenerCarta();
		$this->assertEquals($carta, );
	}
	*/

	public function testAgregarCarta(){
		$mazo = new Mazo;
		$carta = new Espanola("trebol","7");
		$this->assertTrue($mazo->agregarCarta($carta));	
		$this->assertEquals($mazo->cantidadDeCartas(), 1);	
	}

	public function testTieneCartas(){
		$mazo = new Mazo;
		$this->assertFalse($mazo->tieneCartas());
	}
}
