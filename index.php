<?php
session_start();
include 'connection.php';
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
	$_SESSION['currentuser'] = $_COOKIE['username'];
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Main Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v22.0"></script>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo"><strong>Photo Share</strong></a>
						<?php
						if(isset($_SESSION['currentuser']))
							echo '<p>Welcome, ' . $_SESSION['currentuser'] . '</p>';
						?>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>
				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<?php if(isset($_SESSION['currentuser']) && $_SESSION['currentuser'] == 'admin')
							{
								echo '<li><a href="adminpage.php">Admin Page</a></li>';
							} ?>
						</ul>
						<ul class="actions stacked">
							<?php

							if(isset($_SESSION['currentuser']))
							{
								echo '<li><a href="logout.php" class="button fit">Log Out</a></li>';
							} 
							else 
							{
								echo '<li><a href="login.php" class="button fit">Log In</a></li>';
							}

							?>

						</ul>
					</nav>

				<!-- Banner -->
						<section id="banner" class="major">
					<div class="inner">
						<header class="major">
							<?php
							if (!isset($_SESSION['currentuser']))
								echo '<h1>Please Log In to see your posts</h1>';
							?>

						</header>
						<div class="content">
							<?php
							if (isset($_SESSION['currentuser'])) {
								$sql = 'SELECT * FROM images WHERE uploader="' . $_SESSION['currentuser'] . '"';
								$query = mysqli_query($con, $sql) or die(mysqli_error($con));
							?>
							<table width="50%" cellpadding="4" cellspacing="4" rules="rows">
								<tr>
									<th>Post</th>
									<th>Description</th>
									<th colspan="3">Actions</th>
								</tr>
								<?php
								while ($row = mysqli_fetch_array($query)) {
								?>
								<tr style="border-bottom: 1px solid black;">
									<td><img src="<?php echo $row['image']; ?>" width="100" height="100"></td>
									<td><?php echo $row['title']; ?></td>
									<td>
										<?php 
										echo '<a href="edit.php?id=' . $row['id'] . '">Edit</a> ';
										echo '<a href="delete.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure?\')">Delete</a>';
										?>
										<div class="fb-share-button" data-href="http://www.uaic.ro" data-layout="" data-size="">
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.uaic.ro%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
										</div>
									</td>
								</tr>
								<?php 
								}
								?>
							</table>
							<p>Upload Another Post</p>
							<a href="upload.php" class="button fit">Upload</a>
							<?php 
							}
							?>
						</div>
					</section>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="message.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="mesaj">Message</label>
											<textarea name="mesaj" id="mesaj" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input name="submit" type="submit" value="Send Message" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">math@uaic.ro</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(073) 567-9876</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>11 Bd. Carol I32<br />
										Iasi, IS 75650<br />
										Romania</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>