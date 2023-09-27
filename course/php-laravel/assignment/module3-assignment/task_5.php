<?php

function generatePassword($length) {
	$lowerCase = 'abcdefghijklmnopqrstuvwxyz';
	$upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$number = '0123456789';
	$specialChar = '!@#$%^&*()_+';

	$allChar = $lowerCase . $upperCase . $number . $specialChar;

	$pass = substr(str_shuffle($allChar) , 0 , $length);

	echo "Your " . $length . " digit Random Generated Password is: " .  $pass;


}

generatePassword(12);