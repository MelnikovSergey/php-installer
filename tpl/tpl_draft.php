<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Install App</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">	
</head>

<body>
	<?php if(empty($php_error)) 
		echo "<span style='color:green;'>$php_version - OK!</span>";
	      else 
		echo "<span style='color:red;'>$php_error</span>";
	?>
</body>
</html>