<?php
include 'swap.php';

#insertion sort algorithm

function insertionSort(&$arr) {
	$n = count($arr) - 1;
	for ($i = 1; $i <= $n; $i++) {
		$hole = $i;
		while ($hole > 0 && $arr[$hole] < $arr[$hole - 1]) {
			swap($arr[$hole], $arr[$hole - 1]);
			$hole -= 1;
		}
	}
}

$arr = [3,1,2,6,7,23,98,4,8,5];

insertionSort($arr);

print_r($arr);

?>