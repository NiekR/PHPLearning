<!doctype html>
<?php 
	// if(isset($_GET['name'])){
	// 	// print_r($_GET);

	// // 	// Print out plain htmlentities
	// // 	$name = htmlentities($_GET['name']);
	// // 	echo $name;
	//  }

	//  if(isset($_POST['name'])){
	// 	print_r($_POST);

	// 	$name = htmlentities($_POST['name']);
	
	//  }

	 if(isset($_REQUEST['name'])){
		print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
	
	 }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
    	<form method="GET" action="get_post.php"> 
			<div>
				<label for="">Name</label>
				<input type="text" name="name">
			</div>
			<div>
				<label for="">Email</label>
		<input type="text" name="email">
				<button type="submit" value="submit">Submit</button>
			</div>


    	</form>
        
        <script src="js/main.js"></script>
    </body>
</html>