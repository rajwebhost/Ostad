<?php

$start = 2;
$end = 20;
$step = 2;

// For loop
function printEvenNumberWithForLoop($start, $end, $step)
{
	for ($num = $start; $num <= $end; $num += $step) {
		echo $num . " ";
	}
}

echo "Printed Even Number using For Loop: ";
printEvenNumberWithForLoop($start, $end, $step);


// While loop
function printEvenNumberWithWhileLoop($start, $end, $step)
{
	while ($start <= $end) {
		echo $start . " ";
		$start += $step;
	}
}

echo "\nPrinted Even Number using While Loop: ";
printEvenNumberWithWhileLoop($start, $end, $step);


// Do while loop
function printEvenNumberWithDoWhileLoop($start, $end, $step)
{
	do {
		echo $start . " ";
		$start += $step;
	}
	while ($start <= $end);
}

echo "\nPrinted Even Number using Do While Loop: ";
printEvenNumberWithDoWhileLoop($start, $end, $step);

?>