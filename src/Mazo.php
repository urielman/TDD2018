<?php

namespace TDD;

class Mazo {

	protected $cantidadCartas = 0;

	protected $cartas = array();

	public function cantidadDeCartas() {
		return $this->cantidadCartas;
	}

	public function tieneCartas() {
		return $this->cantidadCartas != 0;
	}

	public function agregarCarta($carta) {
		$this->cartas[] = $carta;
		$this->cantidadCartas++;
  }

  	public function crearMazoEspanolas(){
		$this->cartas = array();
		$this->cantidadDeCartas = 0;

		for ($contador = 1; $contador < 13; $contador++) {
            $carta = new Espanola("Oro", $contador);
            $this->agregarCarta($carta);
        }
        for ($contador = 1; $contador < 13; $contador++) {
			$carta = new Espanola("Copa", $contador);
			$this->agregarCarta($carta);
        }
        for ($contador = 1; $contador < 13; $contador++) {
			$carta = new Espanola("Basto", $contador);
			$this->agregarCarta($carta);
        }
        for ($contador = 1; $contador < 13; $contador++) {
			$carta = new Espanola("Espada", $contador);
			$this->agregarCarta($carta);
        }
		$carta = new Espanola("Joker", 1);
		$this->agregarCarta($carta);
		$carta = new Espanola("Joker", 2);
		$this->agregarCarta($carta);
	  }

//devuelve la ult carta del mazo, y la saca del mazo.
	public function obtenerCarta() {

		if ($this->tieneCartas()) {
			$carta = $this->cartas[$this->cantidadCartas - 1];
			$this->cantidadCartas--;
			$this->cartas = array_values($this->cartas); //re-indexar
			return $carta;
		}
		
		return FALSE;
	}

	public function mezclar() {

		if ($this->cantidadDeCartas() > 1) {

			$cartasMezcladas = $this->cartas;
		 	
			if (shuffle($cartasMezcladas)) {

			  //me aseguro de que el mezclado no sea igual que la posicion original de las cartas
        if ($this->cartas == $cartasMezcladas) {
          return $this->mezclar();
        }

		 		$this->cartas = $cartasMezcladas;

      	return TRUE;
   			}

		}
		return FALSE;
		
	}

	public function cortar() {

		if ($this->cantidadDeCartas() > 1) {
			$cartas = $this->cartas;
      
			$limite = rand(1, $this->cantidadCartas - 1);
		  	$mitad1 = array_slice($cartas, 0, $limite);
		  	$mitad2 = array_slice($cartas, $limite);
		  	$final = array_merge($mitad2, $mitad1);

		  	$this->cartas = $final;

			return TRUE;
		}
		return FALSE;
	}

	public function obtenerMazo() {
		if ($this->tieneCartas()) {
			return $this->cartas;
		}
		return FALSE;
	}

}
