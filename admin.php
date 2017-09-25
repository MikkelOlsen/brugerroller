<?php
include ("includes/side_start.php");

// ==============================================================
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Gratis Online Spil</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<div id="container">
	<header id="top" class="tviolet">
		<h1>Gratis Online Spil</h1>

		<p>
		<span>Logget ind som <b>Hans Kristian</b>.</span>
		<a href='logud.php' class='logout'>Log ud</a>
		</p>
	</header>

	<nav>
		<?php
		include ("includes/nav_logincheat.php");
		?>

		<ul>
			<li><a href="index.php" class="tblue">Forside</a></li>
			<li><a href="spil.php" class="tgreen">Spil</a></li>
			<li><a href="profil.php" class="tred">Profil</a></li>
			<li><a href="admin.php" class="tviolet">Admin</a></li>
		</ul>
	</nav>

	<section class="active bvioleta">
		<section class="tviolet">
			<article>
				<header>
					<h1><a  href="#top" title="Til top">Administration</a></h1>
				</header>

				<div id='adminsiden'>

					<div style='font-size: 90%; margin-bottom: 20px;'>
						Du kan her administrere de forskellige rollers rettigheder.<br /><br />
						<div style='color: #fff;'>
							Normalt ville Admin nok ikke kunne administrere sine egne rettigheder. <br />
							Det svarer jo lidt til, at man saver den gren over, som man sidder på ;) <br />
							Men lad det bare være muligt i dette projekt.
						</div>
					</div>


					<?php
					// [TODO]:
					// Her skal man kunne administrere de forskellige rollers rettigheder.
					// I PDF'en er der et eksempel på hvordan det kunne se ud.
					?>

				</div>
			</article>
		</section>


		<section class="tviolet">
			<article>
				<header>
					<h1><a  href="#top" title="Til top">Mine uploads</a></h1>
				</header>

				<p> <img src="images/spil/angryalamo.jpg" width="100%" title="Angry Alamo"> <img src="images/star/star5w0y.png" width="100%" title="Star" class="star"> <br>Angry Alamo </p>
				<p> <img src="images/spil/jewelquest3.jpg" width="100%" title="Jewel Quest 3"> <img src="images/star/star5w0y.png" width="100%" title="Star" class="star"> <br>Jewel Quest 3
				<p> <img src="images/spil/themysteryofthecrystalportal.jpg" width="100%" title="The Mystery of the Crystal Portal"> <img src="images/star/star5w0y.png" width="100%" title="Star" class="star"> <br>The Mystery of the Crystal Portal </p>
			</article>
		</section>
	</section>

	<footer class="tviolet">
		<p>Joanna Christina Olsen Copyright © <?php echo date("Y"); ?> All Rights</p>
	</footer>

</div><!-- Afslutter: container -->

<?php
include ("includes/side_slut.php");
?>

</body>
</html>