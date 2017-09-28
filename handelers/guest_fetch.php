<?php
    require_once 'C:\Xampp\htdocs\gamesite\config.php';

    $user = new Users($db);
    //print_r($allArray);
    
    if(isset($_POST['list']) && $_POST['list'] == 'guest') {
        $arr = [
            'fuldliste' => $user->allPermissionsArray(),
            'rettigheder' => $user->typePermissions(4)
        ];
        header('content-type: application/json');
        echo json_encode($arr);
    } else {
        header('content-type: application/json');
        echo json_encode([
            'msg' => $_POST
        ]);
    }

    

    
?>