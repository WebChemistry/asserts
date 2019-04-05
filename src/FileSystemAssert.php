<?php declare(strict_types = 1);

namespace WebChemistry\Asserts;

use Nette\StaticClass;
use WebChemistry\Asserts\Exceptions\AssertionException;

class FileSystemAssert {

	use StaticClass;

	public static function fileExists(string $filePath): void {
		if (!@is_file($filePath)) {
			throw new AssertionException(sprintf('File "%s" not exists.', $filePath));
		}
	}

}
