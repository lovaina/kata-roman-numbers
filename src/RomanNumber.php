<?php 

namespace Kata;

class RomanNumber
{
	protected $number;

	protected $table = [
		1000 => 'M',
		900 => 'CM',
		500 => 'D',
		400 => 'CD',
		100 => 'C',
		90 => 'XC',
		50 => 'L',
		40 => 'XL'
		10 => 'X',
		5 => 'V',
		4 => 'IV',
		1 => 'I',
	];


	function __construct($number)
	{
		$this->number = $number;
	}

	public function getNumber()
	{
		$romanized = '';

		foreach ($this->table as $numeral => $roman) {
				while ($this->number >= $numeral) {
					$romanized = $romanized.$roman;
					$this->number = $this->number - $numeral;
				}
		}

		return $romanized;
	}
}

 ?>