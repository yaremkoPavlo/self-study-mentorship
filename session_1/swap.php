<?php

function swap(&$a, &$b) {
	$i = $a;
	$a = $b;
	$b = $i;
}

?>