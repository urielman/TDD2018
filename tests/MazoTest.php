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

	public function testCantidadDeCartas{
		$mazo = new Mazo;
		$this->assertEquals($mazo->cantidadDeCartas(), 50);
	}

}
