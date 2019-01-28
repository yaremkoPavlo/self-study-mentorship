<?php
/*
* Fibonacci recursion, linear and recursion with memory method
*/

function fooR(int $n) {
	if ($n <= 1)
		return $n;
	else 
		return fooR($n-1) + fooR($n-2);
	
}

function foo(int $n) {
	if ($n <= 1)
		return $n;
	$f = 0;
	$f1 = 0;
	$f2 = 1;
	for ($i = 2; $i <= $n; $i++) {
		$f = $f1 + $f2;
		$f1 = $f2;
		$f2 = $f;
	}
	return $f;
}

function fooM(int $n) {
	static $arrM = [0, 1];
	if (isset($arrM[$n])) {
		return $arrM[$n];
	} else {
		$f = fooM($n-1) + fooM($n-2);
		$arrM[$n] = $f;
	}
	return $f;
}

echo fooM(40) . PHP_EOL;
?>