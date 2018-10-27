<?php

namespace TDD;

class Cartas {
	protected $palo;
	protected $numero;
	
	public function __construct($palo, $numero) {
	$this->palo = $palo;
	$this->numero = $numero;
	}

	public function obtenerPalo() {
		return $this->palo;
	}

	public function obtenerNumero() {
		return $this->numero;
	}

}

