<?php
    ob_start();
    session_start();
    require_once 'config.php';

    $security = new Security($db);
    $user = new Users($db);
    //print_r($_SESSION);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Gratis Online Spil</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>
<div id="container">

    <header id="top" class="tblue">
        <?php
			require_once 'plugins/header.php';
		?>
    </header>
	<?php
		require_once 'plugins/nav.php';
	?>
    

    <section class="active bbluea">
    <section class="tblue">

        <article>
            <header>
                <h1><a  href="#top" title="Til top">Dagens spil</a></h1>
                <h2>Tera bliver gratis</h2>
                <img src="images/star/star0w5y.png" width="100%" title="Star" class="star">
			</header>
            <p>
				<img src="images/splash/terasplash.jpg" width="48%" height="27.2%" title="Tera - Gratis MMO spil">
				<strong>New "Rising" version of MMORPG to be available without subscription fee next month with no level cap or content restrictions for new players.</strong>
				<br><br>
				En Masse Entertainment's massively multiplayer online role-playing game Tera will be free-to-play when it relaunches at Tera: Rising February 5, it was announced today. Previously, the free-to-play switch was scheduled to take place sometime in February. The new version of the game will not require a subscription fee and new players will not face any content restrictions or a level cap.
				<br><br>
				Though Tera: Rising will be available to play for free, players can use real-world money to purchase various items on an a la carte basis from the in-game marketplace.
				<br><br>
				Past and current Tera subscribers will be awarded permanent "founder" status, which carries numerous exclusive privileges. Those who pay $15 per month for "Elite" status will be granted extra dungeon rewards, 10 bonus quests per day, a daily delivery of items and boosts, an elite mount, in-game store discounts, and waived brokerage registration taxes.
				<br><br>
				A detailed breakdown of Free-versus-Founder-versus-Elite status benefits can be found at the official Tera website.
				<br><br>
				To coincide with the free-to-play business model switch for Tera, new in-game content will be made available. This includes a wave-based dungeon called the Crucible of Flame and a PvP battleground map called Champions' Skyring that "introduces a new way for players to test their skills against each other."
				<br><br>
				Tera is the latest MMO to drop its subscription fee, following Lord of the Rings Online, Age of Conan: Hyborian Adventures, EverQuest II, Aion, and Star Wars: The Old Republic. Bethesda has not said if its upcoming MMO The Elder Scrolls Online will carry a subscription fee, though consultant Nicholas Lovell believes the game will launch with a subscription before going free-to-play.
				</p>

				<?php // [TODO]: Man skal ikke kunne se kommentar-formularen hvis man ikke har lov til at kommentere. ?>

				<form>
					<fieldset>
						<legend>Kommentar</legend>
							<textarea rows="5"></textarea><br>
							<input type="submit" value="Submit">
					</fieldset>
				</form>


				<?php // [TODO]: Man skal ikke kunne se kommantarer, hvis man ikke har rettigheden. ?>


					<p class="comment">
						<span class="name">syle</span> <span class="day">1 dage siden</span>
						<br><br>
						TERA is actually amazing
						<br><br>
						i never played it before and installed it couple days ago
						<br><br>
						and holy shit was i missing out , this game blows guild wars 2 combat system away , the combat is amazing i lvled my warrior to 25 and the battles i had with basilisks and naga mercenaries were the most fun i had in a LONG TIME
						<br><br>
						this game is worth playing , questing system is simple and u have the objectives nicely displayed on your map , no more searching for some quest items on the web its all there
						<br><br>
						the questing is all about killing stuff , and its fine because its the most fun part of the game anyway
						<br><br>
						also the open word pvp is great i havent seen this type of pvp since wow vanilla days or diablo2 , going hostile on questing ppl or just camping bridges with a friend or two is common thing to see (and actually very easy to avoid too u just switch the district if u dont want to fight , but than again why did u roll on pvp server in the 1st place if u dont expect to be ganked etc :) )
						<br><br>
						anyway this game is awesome and totally worth trying , i might just throw some money at them if they do the free to play model right - and it looks like they are doing it right (not limiting pvp for free to play users and boosting pve refresh rate for premiums)
						<br><br>
						just my 2 cents
						<br><br>
						<a class="share">Del</a>
						<a class="like">Synes om</a>

						<?php // [TODO]: Man skal ikke kunne trykke "svar" hvis man ikke har lov til at kommentere. ?>

						<a class="reply">Svar</a>
					</p>

					<p class="comment">
						<span class="name">Akijo</span> <span class="day">1 dage siden</span>
						<br><br>
						One of the best MMO I've played yet. And has the best gameplay I've seen in a MMO yet
						<br><br>
						<a class="share">Del</a>
						<a class="like">Synes om</a>

						<?php // [TODO]: Man skal ikke kunne trykke "svar" hvis man ikke har lov til at kommentere. ?>

						<a class="reply">Svar</a>
					</p>

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
    <section class="tblue">

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

    <footer class="tblue">
    	<p>Joanna Christina Olsen Copyright © <?php echo date("Y"); ?> All Rights</p>
    </footer>

</div><!-- Afslutter: container -->

<?php
include ("includes/side_slut.php");
?>

</body>
</html>