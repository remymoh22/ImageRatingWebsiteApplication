<!DOCTYPE html>
<head>
	<title>Image Rating</title>
	<link rel="icon" href="logofavicon.ico">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<style>
		div.float{
			display: inline-block;
			width: 60px;	
			padding: 10px;
		}
		div.head{
			width: 200px;
		}
		div.sign{
			
			float: right;
			
		}
		body{
			background-color: tan;
		}
		
	</style>
	
   
</head>
<body>
	<div class='float'>
		<img src='logo.png' alt="Logo" height="80" width="60">
	</div>
	<div class='float head'>
		<h1>Image Rating </h1>
	</div>
	<h2>Recent</h2>
	<h2>Popularity</h2>
	 <a href="image_upload_htmlform.html"><button type="button">Upload!</button></a>
<?php
	
$currTime=$_SERVER['REQUEST_TIME'];
echo $currTime;

?>
</body>
</html>