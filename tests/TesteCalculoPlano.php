<?php
use PHPUnit_Framework_TestCase as PHPUnit;
use Application\Calculo;

class TesteCalculoPlano extends PHPUnit {
	public function setUp() {
		/*
		 * Parâmetros de inicialização
		 *
		 * Executando antes de cada im dos testes de classe
		 */

		$this->calculo = new Calculo();
	}
	public function testValor() {
		$this->assertEquals ( 38.00, $this->calculo->semFaleMais( '011', '016', 20 ), 'Não calculou corretamente' );
		$this->assertEquals ( 0.0, $this->calculo->faleMais( '011', '016', 20, 30 ), 'Não calculou corretamente' );
		$this->assertEquals ( 37.40, $this->calculo->faleMais ( '011', '017', 80, 60 ), 'Não calculou corretamente' );
		$this->assertEquals ( 167.20, $this->calculo->faleMais ( '018', '011', 200, 120 ), 'Não calculou corretamente' );
		$this->assertEquals ( null, $this->calculo->semFalemais ( '018', '017', 100 ), 'Não calculou corretamente' );
	}
	public function tearDown() {
		/*
		 * Parâmetros de finalização
		 *
		 * Executando após a finalização de cada im dos testes de classe
		 */
	}
}
?>