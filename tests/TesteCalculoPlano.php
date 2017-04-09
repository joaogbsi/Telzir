<?php 

use PHPUnit_Framework_TestCase as PHPUnit;
use Applications\NativeElements\Calculo;

class TesteCalculoPlano extends PHPUnit{
	
	public function setUp(){
		/*
		 * Parâmetros de inicialização
		 * 
		 * Executando antes de cada im dos testes de classe
		 */
		
		$this->calculo = new Calculo;
	}
	
	public function testValor(){
		
		$this->assertEquals(0.00, $this->calculo->falemais('011','016','20', '30'), 'Não somou corretamente');
		//$this->assertEquals(38.00, $this->calculo->semFalemais('011','016','20'), 'Não somou corretamente');
	}
	
	public function tearDown(){
		/*
		 * Parâmetros de finalização
		 *
		 * Executando após a finalização de cada im dos testes de classe
		 */
	}
	
	
}
?>