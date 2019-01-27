<?php
	// Check for posted data
	// if(filter_has_var(INPUT_POST, 'data')){
	// 	echo "data found";
	// } else{
	// 	echo "no data found";
	// }

	// if(filter_has_var(INPUT_POST, 'data')){
	// 	$email = $_POST['data'];

	// 	// Remove illegal chars
	// 	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	// 	echo $email.'<br>';

	// 	if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
	// 		echo "email is valid";

	// 		# code...
	// 	} else {
	// 		echo "email is not valid";
	// 	}
	// }

	// $var = 23;

	// if(filter_var($var, FILTER_VALIDATE_INT)){
	// 	echo $var. ' is a number';
	// } else {
	// 	echo $var. ' is not a number';
	// }

	# sanitzing number (only show numbers)

	// $var = '33afs32232232faf';

	// var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

	# filter var & input array

	// $filters = array(
	// 	"data" => FILTER_VALIDATE_EMAIL,
	// 	"data2" => array(
	// 		"filter" => FILTER_VALIDATE_INT,
	// 		"options" => array(
	// 			"min_rang" => 1,
	// 			"max_range" => 100
	// 		)
	// 	)
	// );

	// print_r(filter_input_array(INPUT_POST, $filters));

	$arr = array(
		"name" => "je weet",
		"age"  => "21",
		"email" => "jeweet@gmail.com"
		
	);

	$filters = array(
		"name" => array(
			"filter" => FILTER_CALLBACK,
			"options" => "ucwords"
		),
		"age" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_rang" => 1,
				"max_range" => 120
			)
		),
		"email" => FILTER_VALIDATE_EMAIL,
	);

	print_r(filter_var_array($arr, $filters));

 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">

	<input type="text" name="data2">
	
	<button type="submit">Submit</button>
</form>

