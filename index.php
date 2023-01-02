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
  	<script src="prism.js"></script>
  	<link rel="stylesheet" type="text/css" href="prism.css">
  	<style type="text/css">
  		* {
  			font-family: 'Roboto', sans-serif;
  			box-sizing: border-box;
  		}
  	</style>
</head>
<body>
	<div class="container-code">
		<div class="wrapper">
			<h1>Módulo Cookie</h1>
			<ul class="tabs">
				<li data-item="html" class="active">Html</li>
				<li data-item="javascript">JavaScript</li>
				<li data-item="sass">SASS</li>
				<li data-item="css">CSS</li>
			</ul>
			<div class="codes">
				<div id="html" class="code" style="display: block">
					<h2>Html</h2>
					<textarea class="prism-live language-html">
						<?php include 'https://raw.githubusercontent.com/jamesrmoro/module-cookie/main/src/content/module-cookie.php'; ?>
					</textarea>
				</div>
				<div id="javascript" class="code">
					<h2>JavaScript</h2>
					<textarea class="prism-live language-javascript">
						<?php include './src/js/cookie.js'; ?>
					</textarea>
				</div>
				<div id="sass" class="code">
					<h2>SASS</h2>
					<textarea class="prism-live language-sass">
						<?php include './src/sass/cookie.scss'; ?>
					</textarea>
				</div>
				<div id="css" class="code">
					<h2>CSS</h2>
					<textarea class="prism-live language-css">
						<?php include './src/css/cookie.css'; ?>
					</textarea>
				</div>
			</div>
		</div>
	</div>
	<?php include './src/content/module-cookie.php'; ?>
	<script src="prism-live.js"></script>
	<script src="./src/js/cookie.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('body').on('click', '.tabs li', function(){
				$(".tabs li").removeClass("active");
				$(this).addClass("active");
				$(".code").hide();
				var item = $(this).attr("data-item");
				$("#"+item).show();
			});

		});
	</script>
</body>
</html>