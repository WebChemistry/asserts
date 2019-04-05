<?php declare(strict_types = 1);

namespace WebChemistry\Asserts\Exceptions;

use Throwable;

class ArrayAssertionException extends AssertionException {

	/** @var array */
	protected $argument;

	public function __construct(string $message, array $argument = []) {
		parent::__construct($message);

		$this->argument = $argument;
	}

	public function getArgument(): array {
		return $this->argument;
	}

}
