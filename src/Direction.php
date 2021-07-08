<?php
	namespace Stein197;

	/**
	 * Enum-like class that contains only four public constants. They could be combined with each other by using bitwise
	 * OR. This class Should be used whenever direction or side is implied. It cannot be instantiated.
	 * @package Stein197
	 */
	final class Direction {

		/** Upper direction */
		public const UP = 1 << 0;
		/** Down direction */
		public const DOWN = 1 << 1;
		/** Left direction */
		public const LEFT = 1 << 2;
		/** Right direction */
		public const RIGHT = 1 << 3;

		/**
		 * Prevent instantiating
		 */
		private function __construct() {}
	}
