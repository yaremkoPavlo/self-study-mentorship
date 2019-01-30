<?php

#merge sort algoritm

function merge(&$leftA, &$rightA, &$arr) {
	$ni = count($leftA);
	$nj = count($rightA);
	$k = 0;
	$i = 0;
	$j = 0;
	while($i < $ni && $j < $nj) {
		if ($leftA[$i] < $rightA[$j]) {
			$arr[$k] = $leftA[$i];
			$i++;
		} else {
			$arr[$k] = $rightA[$j];
			$j++;
		}
		$k++;
	}
	while ($i < $ni) {
		$arr[$k] = $leftA[$i];
		$i++;
		$k++;
	}
	while ($j < $nj) {
		$arr[$k] = $rightA[$j];
		$j++;
		$k++;
	}
	
}

function mergeSort(&$arr) {
	$n = count($arr);
	if ($n < 2) 
		return;
	$mid = floor($n / 2);
	$leftA = [];
	$rightA = [];
	for ($i = 0; $i < $mid; $i++) {
		$leftA[$i] = $arr[$i];
	}
	for ($j = $mid; $j < $n; $j++) {
		$rightA[$j-$mid] = $arr[$j];
	}
	mergeSort($leftA);
	mergeSort($rightA);
	merge($leftA, $rightA, $arr);
}

$arr = [2,4,1,6,8,5,3,7];

mergeSort($arr);

print_r($arr);
?>