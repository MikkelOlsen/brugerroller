<?php
    $admin = "";
    $profile = "";

    if(isset($_SESSION['userid'])) {
        if($_SESSION['role'] == 1) {
            $admin = '<li><a href="?p=admin" class="tviolet">Admin</a></li>';
        }
    
        if($user->loginCheck($_SESSION['userid'])) {
            $profile = '<li><a href="?p=profil" class="tred">Profil</a></li>';
        }
    }
?>

<nav>
        <ul>
            <li><a href="?p=home" class="tblue">Forside</a></li>
            <li><a href="?p=spil" class="tgreen">Spil</a></li>
            <?= $profile ?>
            <?= $admin ?>
        </ul>
    </nav>