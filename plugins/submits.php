<?php
    require_once 'C:\Xampp\htdocs\gamesite\config.php';

    $user = new Users($db);
	$allArray = $user->allPermissionsArray();
	//print_r($allArray);
	
	if(isset($_POST['list']) && $_POST['list'] == 'guest') {
        echo json_encode([
            'msg' => $_POST
        ]);
        // echo $_POST['permid'];
        if($_POST['checked'] == 'true') {
            echo 'inserted';
            $user->newPerm($_POST['permid'], 4);
        } else {
            echo 'deleted';
            $user->delPerm($_POST['permid'], 4);
        }
		// header('Location: ?p=admin');
    }

    if(isset($_POST['list']) && $_POST['list'] == 'member') {
        echo json_encode([
            'msg' => $_POST
        ]);
        // echo $_POST['permid'];
        if($_POST['checked'] == 'true') {
            echo 'inserted';
            $user->newPerm($_POST['permid'], 3);
        } else {
            echo 'deleted';
            $user->delPerm($_POST['permid'], 3);
        }
		// header('Location: ?p=admin');
    }

    if(isset($_POST['list']) && $_POST['list'] == 'mod') {
        echo json_encode([
            'msg' => $_POST
        ]);
        // echo $_POST['permid'];
        if($_POST['checked'] == 'true') {
            echo 'inserted';
            $user->newPerm($_POST['permid'], 2);
        } else {
            echo 'deleted';
            $user->delPerm($_POST['permid'], 2);
        }
		// header('Location: ?p=admin');
    }
    
	// if(isset($_POST['memberSubmit'])) {
	// 	if(is_array($_POST['checkboxMember'])) {
	// 		foreach($allArray as $key => $item) {
	// 			if(array_intersect($item, $_POST['checkboxMember'])) {
	// 				foreach($_POST['checkboxMember'] as $value => $id) {
	// 					$user->newPerm($id, 3);
	// 				}
	// 			} else {
	// 				$user->delPerm($item['permission_id'], 3);
	// 			}
	// 		}
	// 	}
	// 	// header('Location: ?p=admin');
	// }
	// if(isset($_POST['modSubmit'])) {
	// 	if(is_array($_POST['checkboxMod'])) {
	// 		foreach($allArray as $key => $item) {
	// 			if(array_intersect($item, $_POST['checkboxMod'])) {
	// 				foreach($_POST['checkboxMod'] as $value => $id) {
	// 					$user->newPerm($id, 2);
	// 				}
	// 			} else {
	// 				$user->delPerm($item['permission_id'], 2);
	// 			}
	// 		}
	// 	}
	// 	// header('Location: ?p=admin');
	// }
?>