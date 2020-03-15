<?php
$keywords = isset($keywords) ? $keywords : 'PHP, Ooops, classes, objects';
$title = isset($title) ? $title : 'Missing Page Title';
?>
<!doctype	html>
<html	lang="en">
<head>
	<meta	charset="UTF-8">
	<meta	name="Author"	content="Arvind Kumar @ Inimist Technologies">
	<meta	name="Keywords"	content="<?=$keywords?>">
	<meta	name="Description" content="">
	<title><?=$title?></title>
	<link rel="stylesheet" href="../assets/bootstrap-4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/styles.css" />
</head>
<body>
	<div class="container-fluid header py-3 mb-5">
		<header>
			<h1><?=$title?></h1>
		</header>
	</div>
		<div class="container-fluid body">
			<div class="row">
				<div class="col-3">
					<?php include("leftmenu.php"); ?>
				</div>
				<div class="col-9">
					<iframe src="pages/index.php" name="canvas">

		