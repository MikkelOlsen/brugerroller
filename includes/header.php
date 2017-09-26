<?php
	if($security->secGetMethod('POST')) {
		$post = $security->secGetInputArray(INPUT_POST);
		if(isset($post['login_submit'])) {
			$user->login($post['user_username'], $post['user_password']);
		}
	}
?>

<h1>Gratis Online Spil</h1>

<?php
if(isset($_SESSION['userid'])){
	if($user->loginCheck($_SESSION['userid'])) {
?>
	<div class="logged">
		<a href="?p=logud"><p>Log ud</p></a>
		<p>Logget ind som: <?= $_SESSION['name'] ?></p>
	</div>
<?php
	} 
} else{
?>
<form method='post'>

	<label for='user_username'>Brugernavn</label>
	<input id='user_username' type='text' name='user_username' value="">

	<label for='user_password'>Kodeord</label>
	<input id='user_password' type='password' name='user_password'>

	<input type='submit' name='login_submit' value='Login'>

</form>

<?php
}
?>