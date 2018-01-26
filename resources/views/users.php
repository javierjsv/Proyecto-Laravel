<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link rel="stylesheet" href="">
</head>


<body>
	

	<h1><?= e($title) ?></h1>

		<ul>

		<?php foreach ($Users as $user): ?>

			<li><?= e($user) ?></li>



		<?php endforeach; ?>

		</ul>

</body>
</html>
