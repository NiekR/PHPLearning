<?php

	# substr()
	# return a portion of a string

	// $output = substr('Hello', 1);
	// echo $output;

	// # strlen()
	// # return the lenght of a string

	// $output = strlen('Hello');
	// echo $output;

	# strpos()
	# Finds the postition of the first occurence
	# of a substring

	// $output = strpos('Hello', 'o');
	// echo $output;	

	# strrpos()
	# Finds the postition of the last occurence
	# of a substring

	// $output = strrpos('Hello', 'l');
	// echo $output;

	# trim()
	# trims whitespace

	// $text = 'Hello             People';
	// // var_dump($text);

	// $trimmed = trim($text);
	// echo $trimmed;

	# strtoupper en strtolower
	# To Uppercase en Lowercase
	# ucwords()
	# Capitalize words

	// $output = strtoupper('Hello');
	// echo $output;

	# str_replace()
	# Reaplce all occruences of a search string with a replacement

	// $text = 'Hello People';
	// $output = str_replace('People', 'Guys', $text);

	// echo $output;	

	# gzcompress()
	# Compress a string
	
	$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar odio et laoreet finibus. Phasellus placerat lobortis accumsan. Quisque at vulputate elit. Maecenas ultricies convallis est sed pellentesque. Morbi quis aliquam lacus. Aliquam leo purus, lobortis quis consectetur vitae, suscipit ut purus. Proin sit amet nibh lacus. Pellentesque eleifend sit amet velit vitae elementum. Pellentesque in tortor tempor, dapibus ligula in, tincidunt nisi. Integer vel facilisis dui. Nullam rutrum justo et dignissim malesuada. Suspendisse mattis lacus et mollis luctus. Vestibulum eu consectetur nulla, in eleifend erat.";

	$compressed = gzcompress($string);
	echo $compressed;

	$orignal =  gzuncompress($compressed);
	echo $orignal;



?>