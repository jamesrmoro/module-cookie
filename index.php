<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script
  	src="https://code.jquery.com/jquery-3.6.3.js"
  	integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  	crossorigin="anonymous"></script>
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="./src/css/cookie.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<style type="text/css">
  		* {
  			font-family: 'Roboto', sans-serif;
  			box-sizing: border-box;
  		}
  	</style>
</head>
<body>
	<div class="container-code">
		<div class="codes">
			<div class="code">
			</div>
		</div>
	</div>
	<?php include './src/content/module-cookie.php'; ?>
	<script src="./src/js/cookie.js"></script>
</body>
</html>