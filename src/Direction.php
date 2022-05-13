<?php
namespace Stein197;

/**
 * Enum that contains only four cases. They could be combined with each other by using bitwise OR. This enum should be
 * used whenever direction or side is implied.
 * @package Stein197
 */
enum Direction: int {
	case Up    = 1 << 0;
	case Down  = 1 << 1;
	case Left  = 1 << 2;
	case Right = 1 << 3;
}
