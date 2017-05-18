<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>403 Page Not Found</title>
<style type="text/css">

body {
	color: rgb(68, 68, 68);
    margin: 0px;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    font-stretch: normal;
    font-size: 14px;
    line-height: 20px;
    font-family: Arial, Helvetica, sans-serif;
    height: 100%;
    background-color: rgb(255, 255, 255);
}

/* ERROR HANDLING */
.error403-div {
	height:auto;
	min-height:100%; 
}

.error403-inner {
	text-align: center;
	width:800px;
	margin-left: -400px;
	position:absolute;
	top: 30%;
	left:50%;
}

.error403-div .error403-inner h1 {
	margin:0;
	font-size:150px;
	line-height:150px;
	font-weight:bold;
}

.error403-div .error403-inner h2 {
	margin-top:20px;
	font-size: 30px;
}

</style>
</head>
<body>
	<div class="error403-div">
		<div class="error403-inner">
	        <h1>403</h1>
			<h2>Forbidden</h2>
			<p>Access to this resource on the server is denied!</p>
		</div>
	</div>
</body>
</html>