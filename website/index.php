<?php include 'server-info.php'; ?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>System Info</title>
		
		<link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
        
       <div class="container">
			<h1>Server File Info</h1>
			<?php if ($server): ?>
				<ul class="list-group">
					<?php foreach ($server as $key => $value): ?>
						<li class="list-group-item">
							<strong>
								<?php echo $key; ?>;
							</strong>

							<?php echo $value; ?>
						</li>
						
					<?php endforeach ?>
				</ul>
			<?php endif; ?>

			<h1>Client File Info</h1>
			<?php if ($server): ?>
				<ul class="list-group">
					<?php foreach ($client as $key => $value): ?>
						<li class="list-group-item">
							<strong>
								<?php echo $key; ?>;
							</strong>

							<?php echo $value; ?>
						</li>
						
					<?php endforeach ?>
				</ul>
			<?php endif; ?>

		
        </div>

        <script src="js/main.js"></script>
    </body>
</html>