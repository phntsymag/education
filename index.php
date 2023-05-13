<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
	<title>My website</title>
</head>

<body>
	<nav>
		<ul>
			<li></li>
			<li></li>
		</ul>
	</nav>
	<section>
		<h1></h1>
	</section>
	<div><strong>Hello, <?php echo $user_data['user_name']; ?></strong><br>

		<h3>This is the main page</h3><br>
		<p>See the <a href="gallery.html" class="link">Gallery</a></p>
		<p> Read the <a href="blog.html">Blog</a></p>
		<a href="logout.php">Logout</a>
		<br>
	</div>
	<article>

	</article>
	<footer><a href="sitemap.html">site map</a></footer>
</body>

<style>
	html {
		background-color: lightgreen;
		background-image: radial-gradient(red, blue, green);
	}

	a {
		font-size: smaller;
		font-style: italic;
		color: black;
	}

	body {
		min-height: 100vh;
		display: flex;
		flex-direction: column;
		text-align: center;
	}

	footer {
		margin-top: auto;
	}

	div {
		width: 300px;
		height: 100px;
		text-align: center;
		color: aqua;


	}

	p,
	h3 {
		color: burlywood;
	}

	a:hover {
		color: darkorange;
	}
</style>


</html>