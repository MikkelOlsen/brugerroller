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
			require_once 'includes/header.php';
		?>
    </header>
	<?php
		require_once 'includes/nav.php';
        //print_r($_SESSION);
		if($security->secGetMethod('GET') || $security->secGetMethod('POST')) {
            $get = $security->secGetInputArray(INPUT_GET);
            if(isset($get['p']) && !empty($get['p'])) {
                switch ($get['p']) {
                    case 'home':
                        require_once 'plugins/home.php';
						break;
					case 'spil':
						require_once 'plugins/spil.php';
						break;
					case 'profil':
						require_once 'plugins/profil.php';
						break;
					case 'admin':
						require_once 'plugins/admin.php';
                        break;
                    case 'logud';
                        require_once 'plugins/logud.php';
                        break;

                    
                    default:
                        header('Location: ?p=home');
                        break;
                }
            }
            else {
                header('Location: index.php?p=home');
        }
    }
       
	?>



    
    <footer class="tblue">
    	<p>Joanna Christina Olsen Copyright © <?php echo date("Y"); ?> All Rights</p>
    </footer>

</div><!-- Afslutter: container -->

</body>
</html>