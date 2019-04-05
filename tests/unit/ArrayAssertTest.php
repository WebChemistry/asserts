<?php

use Codeception\AssertThrows;
use Codeception\Test\Unit;
use WebChemistry\Asserts\ArrayAssert;
use WebChemistry\Asserts\Exceptions\ArrayAssertionException;

class ArrayAssertTest extends Unit {

	use AssertThrows;

	public function testRequireKeys(): void {
		ArrayAssert::requireKeys(['ok' => 1], ['ok']);

		$this->assertThrowsWithMessage(ArrayAssertionException::class, 'Array miss "missing" keys.', function () {
			ArrayAssert::requireKeys(['ok' => 1], ['ok', 'missing']);
		});
	}

}