<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Message</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
                    <a href="index.php" class="logo"><strong>Photo Share</strong></a>
					</header>

        <!-- Main -->
        <div id="main" class="alt">

            <!-- One -->
            <section id="one">
                <div class="inner">

                    <h3>Login</h3>
					<?php
						$number1 = rand(1, 9);
						$number2 = rand(1, 9);
						$sum = $number1 + $number2;
					?>

                    <form method="post" action="loginverificare.php">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="username" id="username" value="" placeholder="Username" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input type="password" name="password" id="password" value="" placeholder="Password" />
                            </div>

							<div class="col-6 col-12-xsmall">
                                <input type="text" name="sum" id="sum" placeholder= "<?php echo $number1. ' + '. $number2. ' = '; ?>" />
                            </div>
							<div class="col-6 col-12-xsmall">
								<input type="hidden" name="correctsum" id="correctsum" value="<?php echo $sum; ?>">
							</div>
                            <!-- Break -->
                            <div class="col-6 col-12-small">
                                <input type="checkbox" name="rememberme" id="rememberme" checked>
                                <label for="rememberme">Remember me!</label>
                            </div>
                            <!-- Break -->
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Log In" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

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
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
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