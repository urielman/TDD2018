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
		$this->assertEquals($mazo->cantidadDeCartas(), 0);
	}
 

	public function testObtenerCartaDelMazo(){
		$mazo = new Mazo;
		$carta = new Espanola("trebol","7");
		$carta2 = new Espanola("espada","1");
		$this->assertTrue($mazo->agregarCarta($carta));	
		$this->assertTrue($mazo->agregarCarta($carta2));
		$this->assertEquals($mazo->cantidadDeCartas(), 2);
	
		$this->assertEquals($carta2, $mazo->obtenerCarta());
		$this->assertEquals($mazo->cantidadDeCartas(), 1);

		$this->assertEquals($carta, $mazo->obtenerCarta());
		$this->assertEquals($mazo->cantidadDeCartas(), 0);

		$this->assertFalse($mazo->obtenerCarta());	

	}
	

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
