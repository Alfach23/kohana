<!DOCTYPE html>
<html>
	<head>
		<title>Kohana in local</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h2>Главная страница.</h2> 
			<br/>
			<table border="1">
			<tr><td>Тема письма</td><td>Сообщение</td>
			<?php foreach($appEmails as $app_email) { ?> 
			<tr><td>
				<div style="padding:10px; margin:2px;">
					<?php echo $app_email['subject']; ?><br /></td>
					<td><p><?php echo $app_email['body']; ?></p></td>
				</div>	
				</tr>
			<?php } ?>
			</table>
			
		</div>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<!--<!DOCTYPE html>
<html>
	<head>
		<title>Kohana in local</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h2>Привет!</h2> 
			<p>Меня зовут, <?php /*echo isset($name)? $name : 'Гость'; ?>. 
			Мне <?php echo $age; ?> лет.</p>
		</div>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>-->