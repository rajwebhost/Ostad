<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumber(&$numbers) {
	$numbers = array_filter($numbers, function ($value) {
		return $value % 2 != 0;
	});
}

removeEvenNumber($numbers);

print_r($numbers);