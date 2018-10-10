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

//devuelve la ult carta del mazo, y la saca del mazo.
	public function obtenerCarta(){

		if($this->tieneCartas()){
			$carta = $this->cartas[$this->cantidadCartas - 1];
			$this->cantidadCartas--;
			$this->cartas = array_values($this->cartas);	//re indexar
			return $carta;
		}
		
		return FALSE;
	}

	public function mezclar(){

		if($this->tieneCartas()){

			$cartasMezcladas = $this->cartas;
		 	
			if(shuffle($cartasMezcladas){

			//me aseguro de que el mezclado no sea igual que la posicion original de las cartas
	 		 	if($this->cartas == $cartasMezcladas) return $this->mezclar();
		 		$this->cartas = $cartasMezcladas;

      		return TRUE;
   			}

    	return FALSE;

		}
		return False;
		
	}

	public function cortar(){

		if($this->tieneCartas()){

			return True;
		}
		return False;
	}

}
