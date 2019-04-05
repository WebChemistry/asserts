<?php declare(strict_types = 1);

namespace WebChemistry\Asserts;

use Nette\StaticClass;
use WebChemistry\Asserts\Exceptions\ArrayAssertionException;

class ArrayAssert  {

	use StaticClass;

	public static function requireKeys(array $haystack, array $keys): void {
		$missing = [];
		foreach ($keys as $key) {
			if (!isset($haystack[$key]) && !array_key_exists($key, $haystack)) {
				$missing[] = $key;
			}
		}

		if ($missing) {
			throw new ArrayAssertionException(sprintf('Array miss "%s" keys.', implode(', ', $missing)), $missing);
		}
	}

}
