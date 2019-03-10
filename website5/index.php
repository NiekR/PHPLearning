<?php 

	require('config.php');
	require('db.php');

	// create query
	$query = 'SELECT * FROM posts';

	// get result
	$result =  mysqli_query($conn, $query);

	// fetch data
    // fetch result row ass associate array (array w/ key => value)
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free result
    // free result memory
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
        	<h1>Posts</h1>

        <?php foreach ($posts as $post) : ?>

        	<div class="mt-2 well">
        		<h3>
        			<?php echo $post['title']; ?>		
        		</h3>

				<small>
					<?php echo $post['created_at']; ?>
				</small>
        		
        		<p>
        			<?php echo $post['body']; ?>
    			</p>

    			<a class="btn-default" href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id'] ?>">Read more</a>
    			
        	</div>
    	<?php endforeach ?>
        </div>
    </body>
</html>