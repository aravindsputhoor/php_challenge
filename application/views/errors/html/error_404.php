<!DOCTYPE html>
<html lang="en">
<?php $base_url = load_class('Config')->config['base_url']; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404 | Indiavision News</title>
	<link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo $base_url; ?>assets/style.css" />
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div style=" background-image: url('<?php echo $base_url; ?>assets/emoji.png');" class="notfound-404"></div>
			<h1>404</h1>
			<h2>Oops! Page Not Be Found</h2>
			<p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
			<img style="height: 55px;" src="<?php echo $base_url; ?>assets/news/logo.png" alt="" /><br><br>
			<a href="<?php echo $base_url?>">Back To Homepage</a>
		</div>
	</div>
</body>
</html>
