<?php 
namespace Application;

class Calculo{
	
	function __construct() {
		
	}
	
	private $vetor011 = array(
		'016' => 1.90,
		'017' => 1.70,
		'018' => 0.90
	);
	
	private $vetor016 = array(
		'011' => 2.90
	);	
		
	private $vetor017 = array(
		'011' => 2.70
	);	

	private $vetor018 = array(
		'011' => 1.90
	);	
	
	//public function faleMais($origem, $destino, $tempo, $plano){
		
	private function montarVetor($origem){
		if(strcmp($origem, '011') == 0){
			return $this->vetor011;
		}elseif (strcmp($origem, '016') == 0){
			return $this->vetor016;	
		}elseif (strcmp($origem, '017') == 0){
			return $this->vetor017;
		}elseif (strcmp($origem, '018') == 0){
			return $this->vetor018;
		}else 
			return null;
	}
	
	public function semFaleMais($origem, $destino, $tempo){

		$vetor = $this->montarVetor($origem);

		
		if (array_key_exists($destino, $vetor)){
				return $vetor[$destino]*$tempo;
		}else{
			return null;			
		} 		
		
	}
	
	public function faleMais($origem, $destino, $tempo, $plano){
		$vetor = $this->montarVetor($origem);		
		if (array_key_exists($destino, $vetor)){
			if($tempo > $plano)			
				return ($tempo-$plano)*($vetor[$destino]*1.1);			
			else
				return 0.0;
		}else{
			return null;
		}
	}
}
?>