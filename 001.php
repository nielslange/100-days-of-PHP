<?php

/**
 * Types
 * 
 * Scalar types:
 * 
 * - Boolean
 * - Integer
 * - Float
 * - String
 * 
 * @see https://www.php.net/manual/en/language.types.intro.php
 */

/**
 * Boolean
 * 
 * @see https://www.php.net/manual/en/language.types.boolean.php
 */

$foo = TRUE;
$bar = FALSE;
$boo = true;
$far = false;

/**
 * Integer
 * 
 * decimal     : [1-9][0-9]*
 * hexadecimal : 0[xX][0-9a-fA-F]+
 * octal       : 0[0-7]+
 * binary      : 0[bB][01]+
 * 
 * @see https://www.php.net/manual/en/language.types.integer.php
 */

$a = 1234; // decimal number
$b = 0123; // octal number (equivalent to 83 decimal)
$c = 0x1A;  // hexadecimal number (equivalent to 26 decimal)
$d = 0b11111111; // binary number (equivalent to 255 decimal)

/**
 * Float
 * 
 * LNUM          [0-9]+
 * DNUM          ([0-9]*[\.]{LNUM}) | ({LNUM}[\.][0-9]*)
 * EXPONENT_DNUM (({LNUM} | {DNUM}) [eE][+-]? {LNUM})
 * 
 * @see https://www.php.net/manual/en/language.types.float.php
 */

$a = 1.234; // LNUM
$b = 1.2e3; // DNUM
$c = 7E-10; // EXPONENT_DNUM

/**
 * String
 * 
 * @see https://www.php.net/manual/en/language.types.string.php
 */

$name = 'Niels'; // single quoted
$name = "Niels"; // double quoted

$foo = 'World';
echo <<<EOT
Hello $foo
EOT; // heredoc syntax

$foo = 'World';
echo <<<'EOT'
Hello $foo
EOT; // nowdoc syntax (since PHP 5.3.0)