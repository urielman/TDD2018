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
		$this->cantidadCartas = 0;

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

	public function crearMazoPoker(){
		$this->cartas = array();
		$this->cantidadCartas = 0;

		$carta = new Poker("Diamante", "A");
        $this->agregarCarta($carta);
		for ($contador = 2; $contador < 11; $contador++) {
            $carta = new Poker("Diamante", $contador);
            $this->agregarCarta($carta);
        }
        $carta = new Poker("Diamante", "J");
        $this->agregarCarta($carta);
        $carta = new Poker("Diamante", "Q");
        $this->agregarCarta($carta);
        $carta = new Poker("Diamante", "K");
		$this->agregarCarta($carta);

		$carta = new Poker("Corazon", "A");
        $this->agregarCarta($carta);
        for ($contador = 2; $contador < 11; $contador++) {
            $carta = new Poker("Corazon", $contador);
            $this->agregarCarta($carta);
        }
        $carta = new Poker("Corazon", "J");
        $this->agregarCarta($carta);
        $carta = new Poker("Corazon", "Q");
        $this->agregarCarta($carta);
        $carta = new Poker("Corazon", "K");
		$this->agregarCarta($carta);

		$carta = new Poker("Trebol", "A");
        $this->agregarCarta($carta);
        for ($contador = 2; $contador < 11; $contador++) {
            $carta = new Poker("Trebol", $contador);
            $this->agregarCarta($carta);
        }
        $carta = new Poker("Trebol", "J");
        $this->agregarCarta($carta);
        $carta = new Poker("Trebol", "Q");
        $this->agregarCarta($carta);
        $carta = new Poker("Trebol", "K");
		$this->agregarCarta($carta);

		$carta = new Poker("Pica", "A");
        $this->agregarCarta($carta);
        for ($contador = 2; $contador < 11; $contador++) {
            $carta = new Poker("Pica", $contador);
            $this->agregarCarta($carta);
        }
        $carta = new Poker("Pica", "J");
        $this->agregarCarta($carta);
        $carta = new Poker("Pica", "Q");
        $this->agregarCarta($carta);
        $carta = new Poker("Pica", "K");
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
