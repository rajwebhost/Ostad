<?php

$grades = [85, 92, 78, 88, 95];

function sortArrayDec($grades) {
	rsort($grades);
	print_r($grades);
}

sortArrayDec($grades);

