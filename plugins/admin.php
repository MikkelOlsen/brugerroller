<?php
	$all = $user->allPermissions();
	if(isset($_POST['guestSubmit'])) {
		if(is_array($_POST['checkboxGuest'])) {
			foreach($_POST['checkboxGuest'] as $value => $key){
				$user->newPerm($key, 4);
			}
		}
	}
?>

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
					$permission = $_SESSION['permissions'];
					//print_r($permission);
					foreach($permission as $value) {
						if($value->permission_id == 25) {
					?>
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'Guest')" id="defaultOpen">Gæst</button>
							<button class="tablinks" onclick="openCity(event, 'Member')">Medlem</button>
							<button class="tablinks" onclick="openCity(event, 'Moderator')">Moderator</button>
						</div>

						<div id="Guest" class="tabcontent">
							<form class="perm" id="guestPerm" method="post">
							<?php
								$permissionGuest = $user->typePermissions(4);
								//print_r($permission);
								foreach($all as $value){
									$color = "color:red";
									$checked = "";
									foreach($permissionGuest as $key){
										if($value->permission_id === $key->permission_id){
											$color = "color:green";
											$checked = "checked";
 										}
									}
									echo '<input id="guestCheck'.$value->permission_id.'" type="checkbox" value="'.$value->permission_id.'" '.$checked.' name="checkboxGuest[]">
										  <label for="guestCheck'.$value->permission_id.'" style="'.$color.'">'.$value->permission_name.'</label><br>';
								}
								// print_r($permissionGuest);
								// echo '<br><br>';
								// print_r($all);
							?>
							<button name="guestSubmit" type="submit">Gem</button>
							</form>
						</div>

						<div id="Member" class="tabcontent">
							<form class="perm" id="memberPerm" method="post">
						<?php
							$permissionMember = $user->typePermissions(3);
							//print_r($permission);
							foreach($all as $value){
								$color = "color:red";
								$checked = "";
								foreach($permissionMember as $key){
									if($value->permission_id === $key->permission_id){
										$color = "color:green";
										$checked = "checked";
									 }
								}
								echo '<input id="memberCheck'.$value->permission_id.'" type="checkbox" '.$checked.'>
								<label for="memberCheck'.$value->permission_id.'" style="'.$color.'">'.$value->permission_name.'</label><br>';
							}
						?>
						<button name="memberSubmit" type="submit">Gem</button>
						</form>
						</div>

						<div id="Moderator" class="tabcontent">
							<form class="perm" id="modPerm" method="post">
						<?php
							$permissionModerator = $user->typePermissions(2);
							foreach($all as $value){
								$color = "color:red";
								$checked = "";
								foreach($permissionModerator as $key){
									if($value->permission_id === $key->permission_id){
										$color = "color:green";
										$checked = "checked";
									 }
								}
								echo '<input id="memberCheck'.$value->permission_id.'" type="checkbox" '.$checked.'>
								<label for="memberCheck'.$value->permission_id.'" style="'.$color.'">'.$value->permission_name.'</label><br>';
							}
						?>
						<button name="modSubmit" type="submit">Gem</button>
						</form>
						</div> 
					<?php
						}
					}
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