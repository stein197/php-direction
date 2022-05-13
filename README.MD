# PHP direction enum
This simple package contains only single enum `Stein197\Direction` that contains only four cases: `UP`, `RIGHT`, `DOWN` and `LEFT`. They could be used in various ways, for example trimming a string based on the const:

```php
if ($dir === Direction::Left)
	ltrim($string);
```

Cases could also be masked:

```php
Direction::Top->value | Direction::Bottom->value;
```

## Installation:
Via composer:
```
composer require stein197/direction
```
