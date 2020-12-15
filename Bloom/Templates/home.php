<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bloom</title>
	<link rel="stylesheet" href="/Bloom/Resources/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>
			Online 
			<small class="text-muted">Time: <?= date("d:m:Y H:i:s", $local_people['timestamp']) ?></small>
		</h2>
		<ul class="list-group">
			<?php foreach ($local_people['result'] as $name => $devices): ?>
		  	<li class="list-group-item"><?= $name ?></li>
			<?php endforeach ?>
		</ul>
	</div>
</body>
</html>