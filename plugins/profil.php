<?php
	if(empty($_SESSION['userid'])) {
		header('Location: ?p=home');
	} else if(isset($_SESSION['userid'])) {
		if($user->loginCheck($_SESSION['userid']) === false) {
			header('Location: ?p=home');
		}
	}
?>
<section class="active breda">
		<section class="tred">
			<article>
				<header>
					<h1><a  href="#top" title="Til top">Redigér profil</a></h1>
				</header>
				
				<form action="" class="main" enctype="multipart/form-data" id="update_user" method="post">

					<?php
					// [TODO]:
					// Profilsiden skal ikke vise alle disse oplysninger og indstillinger, hvis man ikke er logget ind.
					// (Her er der tale om sektionerne: Profil, Login, Links og Indstillinger)
					//
					// Følgende sektioner må kun vises, hvis man er logget ind:
					// -- "Profil", "Login", "Links" og "Indstillinger"
					//
					// OBS!:
					// Formularerne skal IKKE være funktionelle.
					// Du skal bare sørge for at de bliver vist eller gemt alt efter om man er logget ind.
					?>

					<fieldset>
						<legend>Profil</legend>


						<?php
						// [TODO]:
						// Hvis brugeren er logget ind, skal du vha. PHP udfylde
						// følgende formular-felter:  brugernavn og rigtige navn.
						// Ignorér alle andre felter på denne side.
						?>

						<label for="username">Brugernavn</label>
						<input id="username" name="username" size="30" type="text" value="<?= $_SESSION['username'] ?>" />
						<label for="medlem_billede">Upload profilbillede <br>
						<small>(Maks. filstørrelse 1MB)</small></label>
						<img alt="profilbillede" src="images/profile.png" />
						<input id="member_image" name="member_image" type="file" />
						<label for="name">Rigtige navn</label>
						<input id="name" name="name" size="30" type="text" value="<?= $_SESSION['name'] ?>" />
						<label for="user_about_me">Om mig</label>
						<textarea id="user_about_me" name="user_about_me" cols="30" rows="20"></textarea>
					</fieldset>

					<!-- ================================================= -->

					<fieldset>
						<legend>Login</legend>

						<label for="email">Email</label>
						<input id="email" name="email" size="30" type="email" value="hkjensen@mail.com" />
						<label for="password">Nuværende kodeord</label>
						<input id="password" name="password" size="30" type="password" value="" />
						<label for="new_password1">Nyt</label>
						<input id="new_password1" name="new_password" size="30" type="password" value="" />
						<label for="new_password2">Gentag nyt</label>
						<input id="new_password2" name="new_password" size="30" type="password" value="" />
					</fieldset>

					<!-- ================================================= -->

					<fieldset>
						<legend>Links</legend>

						<label for="website">Website</label>
						<input id="website" name="website" size="30" type="text" value="http://" />
						<label for="facebook">FaceBook</label>
						<input id="facebook" name="facebook" size="30" type="text" value="http://www.facebook.com/" />
						<label for="twitter">Twitter</label>
						<input id="twitter" name="twitter" size="30" type="text" value="http://www.twitter.com/" />
						<label for="linkedin">LinkedIn</label>
						<input id="linkedin" name="linkedin" size="30" type="text" value="http://www.linkedin.com/" />
					</fieldset>

					<!-- ================================================= -->

					<fieldset>
						<legend>Indstillinger</legend>

						<label for="user_visibility">Hvem kan se min profil</label>
						<select id="user_visibility" name="user_visibility">
						<option value="authenticated">Medlemmer</option>
						<option value="public" selected="selected">Alle</option>
						</select>


						<?php
						// [TODO]:
						// Boksen til at tilmelde/framelde nyhedsbrevet må kun vises,
						// hvis brugeren har rettigheden til at tilmelde sig.
						$permission = $_SESSION['permissions'];
						//print_r($permission);
						foreach($permission as $value) {
							if($value->permission_id == 23) {
						?>

						<label for="news">Nyhedsbrev, ja tak!</label>
						<input id="news" type="checkbox" />
						<?php
							}
						}
						?>
					</fieldset>

					<!-- ================================================= -->

					<fieldset>
						<legend>Dine rettigheder</legend>


						<div id='profil_rettigheder'>
							<?php
							foreach($_SESSION['permissions'] as $value) {
								echo '<span>'.$value->permission_id.' '.$value->permission_name.'</span><br>';
							}
							?>
						</div>
					</fieldset>

					<input name="commit" type="submit" value="Opdatér Profil" />
				</form>
			</article>
		</section>

		<section class="tred">
			<article>
				<header>
					<h1><a  href="#top" title="Til top">Mine uploads</a></h1>
				</header>

				<p> <img src="images/spil/angryalamo.jpg" width="100%" title="Angry Alamo"> <img src="images/star/star5w0y.png" width="100%" title="Star" class="star"> <br>Angry Alamo </p>
				<p> <img src="images/spil/jewelquest3.jpg" width="100%" title="Jewel Quest 3"> <img src="images/star/star5w0y.png" width="100%" title="Star" class="star"> <br>Jewel Quest 3
				<p> <img src="images/spil/themysteryofthecrystalportal.jpg" width="100%" title="The Mystery of the Crystal Portal"> <img src="images/star/star5w0y.png" width="100%" title="Star" class="star"> <br>The Mystery of the Crystal Portal </p>
			</article>

			<article>
				<header>
					<h1><a  href="#top" title="Til top">Senest spillet</a></h1>
				</header>

				<p> <img src="images/spil/deadparadise1.jpg" width="100%" title="Dead Paradise 1"> <img src="images/star/star0w5y.png" width="100%" title="Star" class="star"> <br>Dead Paradise 1 </p>
				<p> <img src="images/spil/jewelquest2.jpg" width="100%" title="Jewel Quest 2"> <img src="images/star/star1w4y.png" width="100%" title="Star" class="star"> <br>Jewel Quest 2 </p>
				<p> <img src="images/spil/mayanmaze.jpg" width="100%" title="Mayan Maze"> <img src="images/star/star2w3y.png" width="100%" title="Star" class="star"> <br>Mayan Maze </p>
			</article>
		</section>
	</section>