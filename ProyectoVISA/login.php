<!DOCTYPE HTML>
<?php ?>
<!--
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Caminar by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script type= "text/javascript" src= "scripts/validacion.js"></script>
	</head>
	<body>

		<!-- Header -->
		<?php include("header.php"); ?>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<div class="wrapper style1">
						<div class="content">

							<!-- Elements -->
								<h2 id="elements">Log into your account</h2>
									
									<div class="12u$ 12u$(medium)">

										<!-- Form -->

											<!--form method="post" action="#"-->
												<div class="row uniform">
													<div class="6u 12u$(xsmall)">
														<input type="email" name="email" id="usuario" value="" placeholder="Email" />
													</div>
													<div class="6u$ 12u$(xsmall)">
														<input type="password" name="pass" id="pass" value="" placeholder="password" />
													</div>
													
													<!-- Break -->
													<div class="12u$">
														<ul class="actions">
															<li><a href="#content" class="button big special" onclick="verifica_usuario()">Sign in</a></li>
														</ul>
													</div>
												</div>
											<!--/form-->

									
									</div>
								</div>
							</div>

						</div>
					</div>
			</section>

		<!-- Footer -->
		<?php include("footer.php"); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>