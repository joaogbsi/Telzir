<?php 
namespace Applications\NativeElements;

class Calculo{
	
	private $vetor011 = array(
		'016' => 1.90,
		'017' => 1.70,
		'018' => 0.90
	);
	
	public function semFaleMais($origem, $destino, $tempo){
		if(strcmp($origem, '011') == 0){
			if ($vetor011[$destino])
				return $vetor011[$destino]*$tempo;
		}/*elseif (strcmp($origem, '016') == 0){
			if ($vetor016[$destino])
				return $vetor016[$destino]*$tempo;
		}elseif (strcmp($origem, '017') == 0){
			if ($vetor017[$destino])
				return $vetor017[$destino]*$tempo;
		}elseif (strcmp($origem, '018') == 0){
			if ($vetor018[$destino])
				return $vetor018[$destino]*$tempo;
		}*/else 
			return null;
		
	}
}
?>