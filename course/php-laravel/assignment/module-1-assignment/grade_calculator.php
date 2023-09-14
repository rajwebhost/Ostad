<?php

// Task 3: Grade Calculator

$physics = 90;
$chemistry = 70;
$math = 80;

$average = ($physics + $chemistry + $math) / 3;

echo "Average score is : " . $average . " And the corresponding grade is: " . grade_calculate($average);

function grade_calculate($marks)
{
	if ($marks >= 80 && $marks <= 100) {
		return "A+";
	} elseif ($marks >= 70 && $marks < 80) {
		return "A";
	} elseif ($marks >= 60 && $marks < 70) {
		return "A-";
	} elseif ($marks >= 50 && $marks < 60) {
		return "B";
	} elseif ($marks >= 40 && $marks < 50) {
		return "C";
	} elseif ($marks >= 33 && $marks < 40) {
		return "D";
	} elseif ($marks > 100) {
		return "Invalid marks provided";
	} else {
		return "F";
	}
}