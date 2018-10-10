<?php

namespace TDD;

class Mazo {

	protected $cantidadCartas = 0;

	protected $cartas = array();

	public function mezclar() {
		return TRUE;
	}

	public function cortar() {
		return TRUE;
	}

	public function cantidadDeCartas(){
		return $this->cantidadCartas;
	}

	public function tieneCartas(){
		return $this->cantidadCartas != 0;
	}

	public function agregarCarta($carta){
		if($this->cartas[] = $carta) {
			$this->cantidadCartas++;
		  	return TRUE;
		}
    	return FALSE;
  	}

}
