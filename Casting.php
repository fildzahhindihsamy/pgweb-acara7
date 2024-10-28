<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$x = 10;       // Integer
$y = 7.89;     // Float
$z = "world";  // String
$flag = false; // Boolean
$empty = NULL; // NULL

$x = (string) $x;
$y = (string) $y;
$z = (string) $z;
$flag = (string) $flag;
$empty = (string) $empty;

// To verify the type of any object in PHP, use the var_dump() function:
var_dump($x);
var_dump($y);
var_dump($z);
var_dump($flag);
var_dump($empty);
?> 
</pre>

<p>Note that when casting a Boolean into a
