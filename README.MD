# PHP direction enum class
This simple package contains only single final class `Stein197\Direction` that contains only four public constants: `UP`, `RIGHT`, `DOWN` and `LEFT`. They could be used in various ways, for example trimming a string based on the const:
```php
if ($dir === Direction::LEFT)
	ltrim($string);
```
Cases could also be masked:
```php
Direction::TOP | Direction::BOTTOM;
```
Insall the package via composer:
```bash
composer require stein197/direction
```
To get more info read the documentation in corresponding docblocks.
