<?php 

function e($data) {
	return htmlspecialchars($data);
}

$title = 'Hello world';
$article = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error nobis illo doloribus. Numquam necessitatibus facilis sint ullam. Natus vitae consequuntur aspernatur, minima, laboriosam officiis eos animi corrupti quia perferendis.';
$created_at = date('d-m-Y H:i:s');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= e($title) ?></title>
</head>
<body>
	<h1><?= e($title) ?></h1>	
	<article>
		<?= e($article) ?>
	</article>
	<span class="pull-right"><?= e($created_at) ?></span>
</body>
</html>