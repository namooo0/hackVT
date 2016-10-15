<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
{ 
	margin: 0;
	border: 0;
	padding: 0;
}
body {
	background: #f0f0f0;
	font: 14px/20px Calibri;
	color: #555;
	margin: 0px auto;
}
h1 {
	text-alight: center;
	font-size: 180%;
	line-height: 120%
	padding: 5% 0px;
}
h2 {
	text-decoration: underline;
	line-height: 280%;
	padding-left: 2%;
}
h3 {
	line-height: 110%;
	padding: 5% 0px;
}
p{
	padding: 1%;
}
img {
	text-align:center;
	max-width: 100%;
	height: auto;
	width: auto;
}
a {
	color: #FFF;
	text-decoration: none;
	font-weight: bold;
}
a:hover {
	color: #FFF;
	text-decoration: underline;
}
header {
	background: #405580;
	width: 100%;
	height: 86px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 100;
	opacity: .90%;
}
#logo {
	margin: 20px;
	float: left;
	width: 200px;
	height: 60px;
	background: url(http://bit.ly/1S6hFxF) no-repeat center;
}
nav {
	float: right;
	padding: 35px 20px 20px 0:
}
#menu-icon {
	display: hidden;
	width: 40px;
	height: 40px;
	background: url(http://bit.ly/1S6hFxF) center;
}
a:hover#menu-icon {
	border-radius:4px 4px 0 0;
}
ul {
	list-style: none;
}
nav ul li {
	display: inline-block;
	float: left;
	padding: 10px;
}
.current {
	color: #FFF;
	text-decoration: underline;
}
#doc {
	margin: 40px 0;
}
#content {
	margin: 0px auto;
	max-width: 1140px;
}

	.carousel-inner > .item > img
	.carousel-inner > .item > a > img {
		position: fixed;
		top: 20px;
		width: 70%;
		margin: 0px auto;
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>