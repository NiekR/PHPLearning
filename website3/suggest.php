<?php

$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";


// get query string
$q = $_REQUEST['q'];

$suggestion = "";

// get suggestions
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($people as $person){
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			} else {
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;