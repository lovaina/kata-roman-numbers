<?php

namespace Tests;

use Kata\RomanNumber;

class RomanNumberTest extends \PHPUnit_Framework_TestCase
{

	public function test_1_is_I(){

		$roman = new RomanNumber(1);

		$this->assertEquals('I', $roman->getNumber());
	}

}

?>