<?php

$studentGrades = [
	[
		'Math' => 88,
		'English' => 95,
		'Science' => 80
	],
	[
		'Math' => 75,
		'English' => 66,
		'Science' => 99
	],
	[
		'Math' => 67,
		'English' => 88,
		'Science' => 96
	]

];

function avgGrades($studentGradesArray)
{
	foreach ($studentGradesArray as $student => $grade) {
		$total = array_sum($grade);
		$average_grade = number_format($total / count($grade), 2);
		echo "The average grade for Student " . ($student + 1) . " is: " . $average_grade . "\n";
	}

}

avgGrades($studentGrades);