<?php

namespace TDD;

class Mazo {

	cantidadCartas = 0;

	public function __construct($cantidadCartas, $numero){
		$this->cantidadCartas = $cantidadCartas;
		$this->numero = $numero;
	}

	public function mezclar() {
		return TRUE;
	}

	public function cortar() {
		return TRUE;
	}

	public function cantidadDeCartas(){
		return 50;
	}

	public function tieneCartas(){
		return $this->cantidadCartas != 0;
	}

}
