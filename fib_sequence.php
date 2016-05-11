<?php

// by considering the terms in the fib sequence whose value do not exceed four million, find the sum of the even-valued terms

$filter_even = function($item) {
	return ($item % 2) == 0;
};

$input = array(0, 1);
$big_num = 4000001;

for ($i=2; $next_term<$big_num; $i++){
	$next_term = $input[$i - 1] + $input[$i - 2];
	array_push($input, $next_term);
}

$output = array_filter($input, $filter_even);
print_r(array_sum($output));
