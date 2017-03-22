<?php

namespace Brisum\Lib;

class Spelling
{
    /**
     * @param int $amount
     * @param string $caseSinge
     * @param string $casePlural1
     * @param string $casePlural2
     * @return string
     */
	public function givenCase($amount, $caseSinge, $casePlural1, $casePlural2)
	{
		if (10 <= $amount && 20 >= $amount) {
			$amount = 10;
		}

		switch ($amount % 10) {
			case 1:
				return $caseSinge;
			case 2:
			case 3:
			case 4:
				return $casePlural1;
			default:
				return $casePlural2;
		}
	}
}
