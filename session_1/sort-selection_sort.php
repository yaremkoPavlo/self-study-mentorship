<?php

#selection sort algorithm

function selectionSort(&$arr) {
	$n = count($arr) - 1;
	for ($i = 0; $i < $n; $i++) {
		$minI = $i+1;
		for ($j = $i+2; $j <= $n; $j++) {
			if ($arr[$j] < $arr[$minI]) {
				$minI = $j;
			}
		}
		if ($arr[$i] > $arr[$minI])
			swap($arr[$i], $arr[$minI]);
			
	}
}

function swap(&$a, &$b) {
	$i = $a;
	$a = $b;
	$b = $i;
}

$arr = [3,1,2,6,7,23,98,4,8,5];

selectionSort($arr);

print_r($arr);


?>