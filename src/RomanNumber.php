<?php 

namespace Kata;

class RomanNumber
{
	protected $number;

	function __construct($number)
	{
		$this->number = $number;
	}

	public function getNumber()
	{
		$roman = '';
		while ($this->number >= 1) {
			$roman = $roman.'I';
			$this->number = $this->number - 1;
		}

		return $roman;
	}
}

 ?>