<?php

namespace Tests;

use Kata\RomanNumber;

class RomanNumberTest extends \PHPUnit_Framework_TestCase
{

	public function test_1_is_I(){

		$roman = new RomanNumber(1);

		$this->assertEquals('I', $roman->getNumber());
	}

	public function test_2_is_II(){

		$roman = new RomanNumber(2);

		$this->assertEquals('II', $roman->getNumber());
	}

	public function test_3_is_III(){

		$roman = new RomanNumber(3);

		$this->assertEquals('III', $roman->getNumber());
	}

	public function test_4_is_IV(){

		$roman = new RomanNumber(4);

		$this->assertEquals('IV', $roman->getNumber());
	}

	public function test_5_is_V(){

		$roman = new RomanNumber(5);

		$this->assertEquals('V', $roman->getNumber());
	}

	public function test_6_is_VI(){

		$roman = new RomanNumber(6);

		$this->assertEquals('VI', $roman->getNumber());
	}

	public function test_8_is_VIII(){

		$roman = new RomanNumber(8);

		$this->assertEquals('VIII', $roman->getNumber());
	}

	public function test_9_is_IX(){

		$roman = new RomanNumber(9);

		$this->assertEquals('IX', $roman->getNumber());
	}

	public function test_10_is_X(){

		$roman = new RomanNumber(10);

		$this->assertEquals('X', $roman->getNumber());
	}

	public function test_50_is_L(){

		$roman = new RomanNumber(50);

		$this->assertEquals('L', $roman->getNumber());
	}

	public function test_60_is_LX(){

		$roman = new RomanNumber(60);

		$this->assertEquals('LX', $roman->getNumber());
	}

	public function test_100_is_C(){

		$roman = new RomanNumber(100);

		$this->assertEquals('C', $roman->getNumber());
	}

	public function test_500_is_D(){

		$roman = new RomanNumber(500);

		$this->assertEquals('D', $roman->getNumber());
	}

	public function test_1000_is_M(){

		$roman = new RomanNumber(1000);

		$this->assertEquals('M', $roman->getNumber());
	}

	public function test_1215_is_MCCXV(){

		$roman = new RomanNumber(1215);

		$this->assertEquals('MCCXV', $roman->getNumber());
	}

}

?>