<?php

// Task 5: Weather Report


$temperature1 = -20;
$temperature2 = 24;
$temperature3 = 36;

weather_report($temperature1); // Output: It's freezing!
weather_report($temperature2); // Output: It's cool.
weather_report($temperature3); // Output: It's warm.


function weather_report($temperature)
{
	if ($temperature <= 0) {
		echo "It's freezing! ";
	} elseif ($temperature <= 27 && $temperature > 0) {
		echo "It's cool. ";
	} else {
		echo "It's warm. ";
	}

}