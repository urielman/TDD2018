<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartasTest extends TestCase {

	public function testExisteObjetoPoker(){
		$carta = new Poker("trebol", "10");
        $this->assertTrue(isset($carta));
	}

	public function testExisteObjetoEspañolas(){
		$carta = new Española("trebol","7");
        $this->assertTrue(isset($carta));
	}

	public function testVerAtributos(){
		$carta = new Poker("trebol", "10");
		$this->assertEquals($carta->obtenerPalo(), "trebol");
		$this->assertEquals($carta->obtenerNumero(), "10");
	}

}
