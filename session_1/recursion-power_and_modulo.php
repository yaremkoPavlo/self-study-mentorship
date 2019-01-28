<?php
/*
* pow function with recursion
*/

function powN($x, $n) {
	if ($n == 0)
		return 1;
	
	if ($n % 2 == 0) {
		$y = powN($x, $n/2);
		return $y * $y;
	}
	
	return $x * powN($x, $n-1);
}

//echo powN(4,280);
//echo pow(4,280);

function moduleFromPow($x, $n, $m) {
	if ($n == 0)
		return 1;
	
	if ($n % 2 == 0) {
		$y = moduleFromPow($x, $n/2, $m);
		return ($y * $y) % $m;
	}
	
	if ($n % 2 !== 0) {
		return (($x % $m) * moduleFromPow($x, $n-1, $m)) % $m;
	}
}

echo moduleFromPow(5,3,7);


?>