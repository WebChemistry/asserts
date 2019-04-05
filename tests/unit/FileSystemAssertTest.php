<?php

use Codeception\AssertThrows;
use Codeception\Test\Unit;
use WebChemistry\Asserts\Exceptions\AssertionException;
use WebChemistry\Asserts\FileSystemAssert;

class FileSystemAssertTest extends Unit {

	use AssertThrows;


	public function testFileExists() {
		FileSystemAssert::fileExists(__FILE__);

		$this->assertThrowsWithMessage(AssertionException::class, sprintf('File "%s" not exists.', __DIR__ . '/foo'), function () {
			FileSystemAssert::fileExists(__DIR__ . '/foo');
		});
	}

}
