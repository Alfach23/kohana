<!DOCTYPE html>
<html>
	<head>
		<title>Kohana in local</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h2>Привет!</h2> 
			<p>Меня зовут, <?php echo isset($name)? $name : 'Гость'; ?>. 
			Мне <?php echo $age; ?> лет.</p>
		</div>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>