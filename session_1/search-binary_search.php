<?php

function binarySearch($el, $arr) {
	$start = 0;
	$end = count($arr) - 1;
	while ($end >= $start) {
		$mid = mid($start, $end);
		if ($el == $arr[$mid])
			return $mid;
		if ($el > $arr[$mid]) {
			$start = $mid + 1;
		} else {
			$end = $mid - 1;
		}
	}
	
	if ($el == $arr[$start])
		return $start;
	return -1;
	
}

function mid($start, $end) {
	return floor($start + ($end - $start) / 2);
}

$arr = [2, 6, 13, 21, 36, 47, 63, 81, 97];

//echo binarySearch(82, $arr);

# recursion binary search

function binarySearchR($el, $arr, $start, $end) {
	$mid = mid($start, $end);
	if ($el == $arr[$mid])
		return $mid;
	if ($start >= $end) 
		return -1;
	if ($el > $arr[$mid]) {
		return binarySearchR($el, $arr, $mid+1, $end);
	} else {
		return binarySearchR($el, $arr, $start, $mid-1);
	}
}

echo binarySearchR(2, $arr, 0, 8);
?>