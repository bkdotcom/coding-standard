<?php // lint >= 7.4

max(
	0,
	1,
);

$closure = function () {
};

$closure(
	'something',
);

(function () {

})(
	0,
	1,
);

class Whatever extends Something
{

	public function __construct($something, $anything)
	{
		parent::__construct(
			$something,
			$anything,
		);

		self::doSelf(
			$something,
			$anything,
		);

		static::doStatic(
			$something,
			$anything,
		);

		if (isset(
			$something,
			$anything,
		)) {
			unset(
				$something,
				$anything,
			);
		}
	}

}

$whatever = new Whatever(
	'something',
	'anything',
);

doSomething(
	1,
	2,
)(
	3,
	4,
);

class SelfStaticParent extends Whatever
{

	public static function createSelf($a, $b)
	{
		return new self(
			$a,
			$b,
		);
	}

	public static function createStatic($a, $b)
	{
		return new static(
			$a,
			$b,
		);
	}

	public static function createParent($a, $b)
	{
		return new parent(
			$a,
			$b,
		);
	}

}

call(
	function () {
	},
);

call(
	fn () => 1,
);

call(
	fn (array $array) => $array['key'],
);

call(
	OPTION_TASK_BUILD_YVES,
	OPTION_TASK_BUILD_YVES_SHORT,
	InputOption::VALUE_NONE,
	'execute \'npm run\' to build the project resources of yves',
);
