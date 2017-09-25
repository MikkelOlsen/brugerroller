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

    <header id="top" class="tgreen">
        <h1>Gratis Online Spil</h1>

		<?php  include ("includes/vis_login_form_eller_brugernavn.php"); ?>
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

    <section class="active bbluea">
    <section class="tgreen" id="spilsiden">

        <article>
            <header>
                <h1><a  href="#top" title="Til top">Spil</a></h1>
			</header>

			<?php
			// Nu hvor du er blevet eksperter i at bruge Arrays
			// kan jeg godt tillade mig at bruge dem her ;)
			// Så slipper vi for at hente spil-billederne fra en databasen

			$spil_array = array (
				"angryalamo.jpg",
				"bubblematch.jpg",
				"coastbike.jpg",
				"deadparadise.jpg",
				"dirtydevils.jpg",
				"jewelquest1.jpg",
				"mayanmaze.jpg",
				"themysteryofthecrystalportal.jpg",
				"jewelquest3.jpg",
				"virtualvillagers.jpg"
			);

			foreach ($spil_array as $key => $fil)
			{
				echo "<div class='spilbox'>";
					echo "<img src='images/spil/$fil' alt='' /><br />";
					echo "<img src='images/star/star0w5y.png' width='100%' title='Star' class='star' />";

					// [TODO]: Følgende link må kun vises, hvis brugeren har rettighed til at spille online.
					echo "<a href='#'><img src='images/layout/play.png' alt='' style='height: auto; width: auto; vertical-align: middle; box-shadow: 1px 1px 2px #666; border: 1px solid #333; padding: 1px;' /> Spil online</a><br />";

					// [TODO]: Følgende link må kun vises, hvis brugeren har rettighed til at downloade spil.
					echo "<a href='#'><img src='images/layout/download.gif' alt='' style='height: auto; width: auto; background-color: #000; vertical-align: middle; box-shadow: 1px 1px 2px #444' /> Download</a><br />";

				echo "</div>";
			}
			?>
    	</article>

            <article>
                <header><h1><a  href="#top" title="Til top">Top 3 Online spil</a></h1></header>
                    <p>
<img src="images/spil/coastbike.jpg" width="100%" title="Coast Bike">
<img src="images/star/star0w5y.png" width="100%" title="Star" class="star">
<br>
Coast Bike
                    </p>
                    <p>
<img src="images/spil/virtualvillagers.jpg" width="100%" title="Virtual Villagers">
<img src="images/star/star0w5y.png" width="100%" title="Star" class="star">
<br>
Virtual Villagers
                    </p>
                    <p>
<img src="images/spil/bubblematch.jpg" width="100%" title="Bubble Match">
<img src="images/star/star1w4y.png" width="100%" title="Star" class="star">
<br>
Bubble Match
                    </p>
            </article>

            <article>
                <header><h1><a  href="#top" title="Til top">Top 3 Downloadede spil</a></h1></header>
                    <p>
<img src="images/spil/dirtydevils.jpg" width="100%" title="Dirty Devils">
<img src="images/star/star1w4y.png" width="100%" title="Star" class="star">
<br>
Dirty Devils
                    </p>
                    <p>
<img src="images/spil/deadparadise.jpg" width="100%" title="Dead Paradise">
<img src="images/star/star1w4y.png" width="100%" title="Star" class="star">
<br>
Dead Paradise
                    </p>
                    <p>
<img src="images/spil/jewelquest1.jpg" width="100%"  title="Jewel Quest 1">
<img src="images/star/star2w3y.png" width="100%" title="Star" class="star">
<br>
Jewel Quest 1
                    </p>
            </article>

    </section>
    <section class="tgreen">

		<?php // [TODO]: Upload knappen skal kun vises hvis man har lov at uploade spil. ?>

		<article class="upload">
			<a href="#"><header>Upload <br>nyt spil</header></a>
		</article>

		<article>
			<header><h1><a  href="#top" title="Til top">Nyheder</a></h1></header>
                    <p>
<img src="images/spil/angryalamo.jpg" width="100%" title="Angry Alamo">
<img src="images/star/star5w0y.png" width="100%" title="Star" class="star">
<br>
Angry Alamo
                     </p>
                    <p>
<img src="images/spil/jewelquest3.jpg" width="100%" title="Jewel Quest 3">
<img src="images/star/star5w0y.png" width="100%" title="Star" class="star">
<br>
Jewel Quest 3
                    <p>
<img src="images/spil/themysteryofthecrystalportal.jpg" width="100%" title="The Mystery of the Crystal Portal">
<img src="images/star/star5w0y.png" width="100%" title="Star" class="star">
<br>
The Mystery of the Crystal Portal
                    </p>
            </article>

            <article>
                <header><h1><a  href="#top" title="Til top">Udvalgte</a></h1></header>
                    <p>
<img src="images/spil/deadparadise1.jpg" width="100%" title="Dead Paradise 1">
<img src="images/star/star0w5y.png" width="100%" title="Star" class="star">
<br>
Dead Paradise 1
                    </p>
                    <p>
<img src="images/spil/jewelquest2.jpg" width="100%" title="Jewel Quest 2">
<img src="images/star/star1w4y.png" width="100%" title="Star" class="star">
<br>
Jewel Quest 2
                    </p>
                    <p>
<img src="images/spil/mayanmaze.jpg" width="100%" title="Mayan Maze">
<img src="images/star/star2w3y.png" width="100%" title="Star" class="star">
<br>
Mayan Maze
                    </p>
            </article>
		</section>
		</section>

    <footer class="tgreen">
    	<p>Joanna Christina Olsen Copyright © <?php echo date("Y"); ?> All Rights</p>
    </footer>

</div><!-- Afslutter: container -->

<?php
include ("includes/side_slut.php");
?>

</body>
</html>