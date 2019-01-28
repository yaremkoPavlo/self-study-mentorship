<?php
function fooR(int $n) {
	if ($n == 0)
		return 1; 
	else
		return $n*fooR($n-1);
	
}

function foo(int $n) {
	$f = 1;
	if ($n == 0)
		return $f;
	for ($i = 1; $i <= $n; $i ++) {
		$f = $i * $f;
	}
	return $f;
}

echo foo(200) . PHP_EOL;
?>