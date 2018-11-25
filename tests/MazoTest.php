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

	public function testCantidadDeCartas(){
		$mazo = new Mazo;
		$this->assertEquals($mazo->cantidadDeCartas(), 0);
	}
	/**
	 * Valida que se crea un mazo de cartas espanolas, de 50 cartas
	 *
	 */
	public function testCrearMazoEspanolas(){
		$mazo = new Mazo;
		$this->assertEquals($mazo->cantidadDeCartas(), 0);		

		$mazo->crearMazoEspanolas();
		$this->assertEquals($mazo->cantidadDeCartas(), 50);	

		$carta = new Espanola("Copa", 7);
		$this->assertTrue(in_array($carta, $mazo->obtenerMazo()));
	}

	public function testObtenerCartaDelMazo(){
		$mazo = new Mazo;
		$carta = new Espanola("Copa","7");
		$carta2 = new Espanola("Espada","1");
		$mazo->agregarCarta($carta);	
		$mazo->agregarCarta($carta2);
		$this->assertEquals($mazo->cantidadDeCartas(), 2);
	
		$this->assertEquals($carta2, $mazo->obtenerCarta());
		$this->assertEquals($mazo->cantidadDeCartas(), 1);

		$this->assertEquals($carta, $mazo->obtenerCarta());
		$this->assertEquals($mazo->cantidadDeCartas(), 0);

		$this->assertFalse($mazo->obtenerCarta());	

	}
	

	public function testAgregarCarta(){
		$mazo = new Mazo;
		$carta = new Espanola("Copa","7");
		$mazo->agregarCarta($carta);	
		$this->assertEquals($mazo->cantidadDeCartas(), 1);	
	}

	public function testTieneCartas(){
		$mazo = new Mazo;
		$this->assertFalse($mazo->tieneCartas());
	}

	public function testMezclar(){
		$mazo = new Mazo;
		$carta = new Espanola("Copa","4");
		$carta2 = new Espanola("Espada","1");
		$carta3 = new Espanola("Basto","1");
		$carta4 = new Espanola("Oro","7");
		//caso con mazo vacio
		$this->assertFalse($mazo->mezclar());
		//caso con mazo de una carta
		$mazo->agregarCarta($carta);
		$this->assertFalse($mazo->mezclar());

        $mazo->agregarCarta($carta2);
		$mazo->agregarCarta($carta3);
		$mazo->agregarCarta($carta4);
		$this->assertEquals($mazo->cantidadDeCartas(), 4);

        $mazoPrueba = array($carta, $carta2, $carta3, $carta4);
        $this->assertEquals($mazo->obtenerMazo(), $mazoPrueba);
        
		$this->assertTrue($mazo->mezclar());
        $this->assertNotEquals($mazo->obtenerMazo(), $mazoPrueba);
	}

	public function testCortar(){
		$mazo = new Mazo;
		$carta = new Espanola("Copa","4");
		$carta2 = new Espanola("Espada","1");
		$carta3 = new Espanola("Basto","1");
		$carta4 = new Espanola("Oro","7");
		//caso con mazo vacio
		$this->assertFalse($mazo->obtenerMazo());
		$this->assertFalse($mazo->cortar());

	    $mazo->agregarCarta($carta);	
        $mazo->agregarCarta($carta2);
		$mazo->agregarCarta($carta3);
		$mazo->agregarCarta($carta4);
		$this->assertEquals($mazo->cantidadDeCartas(), 4);

        $mazoPrueba = array($carta, $carta2, $carta3, $carta4);
        $this->assertEquals($mazo->obtenerMazo(), $mazoPrueba);
        
		$this->assertTrue($mazo->cortar());
        $this->assertNotEquals($mazo->obtenerMazo(), $mazoPrueba);


		$this->assertNotEquals($mazo->obtenerCarta(), $carta4); //la primer carta no puede ser la misma que antes

	}
}
