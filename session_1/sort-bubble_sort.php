<?php

#bubble sort algorithm

function bubbleSort(&$arr) {
	$n = count($arr) - 1;
	for ($i = 0; $i < $n; $i++) {
		$index = -1;
		for ($j = 0; $j < $n; $j++) {
			if ($arr[$j] > $arr[$j+1]) {
				swap($arr[$j], $arr[$j+1]);
				$index = 1;
			}
		}
		if ($index == -1) {
			return;
		}
	}
}

function swap(&$a, &$b) {
	$i = $a;
	$a = $b;
	$b = $i;
}

$arr = [2,7,4,1,5,3];

bubbleSort($arr);

print_r($arr);
?>