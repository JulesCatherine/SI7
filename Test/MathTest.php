<?php
//bibliothèque de test
use PHPUnit\Framework\TestCase; 

class MathTest extends TestCase {

		public function testDouble(){
			//verifie si le double de 2 est égale à 4
			$this->assertEquals(4, \App\Math::double(2));
		}

		public function testTTC(){
			//verifie si on retourne la valeur TTC d’un montant HT
			$this->assertEquals(20 , \App\Math::TTC(100));
		}

		public function testvariable(){
			$this->assertEquals( "C'est le même type", \App\Math::variable(v1,v2));
		}

		public function testPlusPetit(){
			$this->assertEquals( "C'est plus petit", \App\Math::variable(v1,v2));
		}

	}
?>
