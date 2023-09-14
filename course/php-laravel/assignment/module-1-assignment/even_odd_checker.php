<?php

// Task 4: Even or Odd Checker

$number1 = 10;
$number2 = 27;

even_odd_checker($number1); // Output: The given Number 10 is Even

even_odd_checker($number2); // Output: The given Number 27 is Odd


function even_odd_checker($number)
{
	if ($number % 2 == 0) {
		echo "The given Number $number is Even";
	} else {
		echo "The given Number $number is ODD";
	}
}