<?php

$text = "The quick brown fox jumps over the lazy dog.";

function convertToLowercase($text) {
	$text = strtolower($text);
	$text = str_replace('brown','red', $text);
	echo $text;
}

convertToLowercase($text);