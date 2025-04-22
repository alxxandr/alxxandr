<?php
	function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

	$numeErr = $emailErr = $mesajErr = "";
    $nume = $email = $mesaj = "";
    $err = 0;

	if(isset($_POST["submit"])){
        if(empty($_POST["name"]))
        {
            $numeErr = "Name is required";
            $err = 1;
        }
        else {
            $nume = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z]*$/", $nume)){
                $numeErr = "Only alphabets and white space are allowed";
                $err = 1;
            }
        }

        if(empty($_POST["email"]))
        {
            $emailErr = "Email is required";
            $err = 1;
        }
        else {
            $email = test_input($_POST["email"]);

            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";

            if(!preg_match($pattern, $email)){
                
                $err = 1;
                $emailErr = "Invalid email format";
            }
        }

        if(empty($_POST["mesaj"]))
        {
            $err = 1;
            $mesajErr = "Message is required";
        }
        else {
            $mesaj = test_input($_POST["mesaj"]);
        }
    }
?>

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


					<div id="main" class="alt">

					<section id="one">
						<div class="inner">
							<header class="major">
								<h1>									
                                    <?php
									if($err == 0)
									{
										echo 'Message sent successfully!';
									}
									else
									{
										echo 'Error: ' . $numeErr . ' ' . $emailErr .  ' ' . $mesajErr;
									} ?>
                                </h1>
								<a href="index.php" class="button fit">Main Page</a></li>
							</header>
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