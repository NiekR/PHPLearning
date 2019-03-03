<?php 

    require('config.php');
	require('db.php');

    // get id
    $id = mysqli_real_escape_string($conn,$_GET['id']);

	// create query
	$query = 'SELECT * FROM posts WHERE id ='.$id;

	// get result
	$result =  mysqli_query($conn, $query);

	// fetch data
	$posts = mysqli_fetch_assoc($result);

	// free resul
	mysqli_free_result($result);
	// var_dump($posts);

	// close conn
	mysqli_close($conn);

	// assos array
	// ['name' => 'jan']

 ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <div class="container">
            <a href="<?php echo ROOT_URL; ?>" class="btn-default">Back</a>

        	<h1><?php echo $posts['title']; ?>  </h1>

			<small>
				<?php echo $posts['created_at']; ?>
			</small>
    		
    		<p>
    			<?php echo $posts['body']; ?>
			</p>
    			
        </div>
    </body>
</html>