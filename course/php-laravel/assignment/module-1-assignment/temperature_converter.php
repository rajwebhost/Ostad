<?php

// Task 2: Temperature Converter

$temp_celsius = 24;

$temp_fahrenheight = 98.6;


echo $temp_celsius . ' Degree Celsius = ' . celsius_to_fahrenheight($temp_celsius) . ' Degree Fahrenheight' . "<br>";

echo $temp_fahrenheight . ' Degree Fahrenheight = ' . fahrenheight_to_celsius($temp_fahrenheight) . ' Degree Celsius';


// function to convert temperature from celsius to fahrenheight
function celsius_to_fahrenheight($temperature)
{

	$temperature = (($temperature * 9 / 5) + 32);

	return $temperature;

}

// function to convert temperature from fahrenheight to celsius
function fahrenheight_to_celsius($temperature)
{
	$temperature = (($temperature - 32) * 5 / 9);

	return $temperature;
}