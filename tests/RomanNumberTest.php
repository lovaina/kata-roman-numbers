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

}

?>