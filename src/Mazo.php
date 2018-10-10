<?php

namespace TDD;

class Mazo {

	protected $cantidadCartas = 0;

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
