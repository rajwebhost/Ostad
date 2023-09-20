<?php

function fibonacci($n)
{
	$fib = [0, 1];

	echo "Fibonacci series of up to $n number is : ";
	echo $fib[0] . ' ' . $fib[1];

	for ($i = 2; $i < $n; $i++) {
		$fib[$i] = $fib[$i - 1] + $fib[$i - 2];

		if ($fib[$i] > 100) {
			break;
		}
		echo $fib[$i] . " ";
	}

}

fibonacci(10);


?>