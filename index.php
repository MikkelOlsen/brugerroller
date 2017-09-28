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
        // print_r($_SESSION);
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
                    case 'logud':
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
<script>
    loadGuestPerms();
    loadMemberPerms();
    loadModPerms();

        function submitGuest(e){
            var checked = '';
            if(e.checked == true){
                checked = 'true';
            }
            fetch('plugins/submits.php', {
                    method: 'POST', 
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: 'permid='+e.value+'&list=guest&checked='+checked
                })
                .then(function(result){
                    loadGuestPerms();
                });

        }

        function loadGuestPerms(){
            var output = '';
            var color = 'color:red';
            var checked = '';
            fetch('handelers/guest_fetch.php', {
                    method: 'POST',
                    mode: 'cors',
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: 'list=guest'
                })
                .then(function(result){
                    return result.json();
                })
                .then(function(list){
                    var output = '';
                    var checked = '';
                    var color = '';
                    console.log(list);
                    for(var i in list.fuldliste){
                        checked = '';
                        color = 'color:red';
                        for(var a in list.rettigheder){
                            if(list.fuldliste[i].permission_id == list.rettigheder[a].permission_id){
                                checked = 'checked';
                                color = 'color:green';
                            }
                        }
                        output += '<input class="guestperm" id="guestCheck'+list.fuldliste[i].permission_id+'" type="checkbox" value="'+list.fuldliste[i].permission_id+'" '+checked+' onchange="submitGuest(this);" name="checkboxGuest[]">' +
                                  '<label for="guestCheck'+list.fuldliste[i].permission_id+'" style="'+color+'">'+list.fuldliste[i].permission_name+'</label><br>';
                    }
                    document.getElementById('guestPerm').innerHTML = output;
                });
        }

        function submitMember(e){
            var checked = '';
            if(e.checked == true){
                checked = 'true';
            }
            fetch('plugins/submits.php', {
                    method: 'POST', 
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: 'permid='+e.value+'&list=member&checked='+checked
                })
                .then(function(result){
                    loadMemberPerms();
                });

        }

        function loadMemberPerms(){
            var output = '';
            var color = 'color:red';
            var checked = '';
            fetch('handelers/member_fetch.php', {
                    method: 'POST',
                    mode: 'cors',
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: 'list=member'
                })
                .then(function(result){
                    return result.json();
                })
                .then(function(list){
                    var output = '';
                    var checked = '';
                    var color = '';
                    console.log(list);
                    for(var i in list.fuldliste){
                        checked = '';
                        color = 'color:red';
                        for(var a in list.rettigheder){
                            if(list.fuldliste[i].permission_id == list.rettigheder[a].permission_id){
                                checked = 'checked';
                                color = 'color:green';
                            }
                        }
                        output += '<input class="memberperm" id="memberCheck'+list.fuldliste[i].permission_id+'" type="checkbox" value="'+list.fuldliste[i].permission_id+'" '+checked+' onchange="submitMember(this);" name="checkboxmember[]">' +
                                  '<label for="memberCheck'+list.fuldliste[i].permission_id+'" style="'+color+'">'+list.fuldliste[i].permission_name+'</label><br>';
                    }
                    document.getElementById('memberPerm').innerHTML = output;
                });
        }

        function submitMod(e){
            var checked = '';
            if(e.checked == true){
                checked = 'true';
            }
            fetch('plugins/submits.php', {
                    method: 'POST', 
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: 'permid='+e.value+'&list=mod&checked='+checked
                })
                .then(function(result){
                    loadModPerms();
                });

        }

        function loadModPerms(){
            var output = '';
            var color = 'color:red';
            var checked = '';
            fetch('handelers/mod_fetch.php', {
                    method: 'POST',
                    mode: 'cors',
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: 'list=mod'
                })
                .then(function(result){
                    return result.json();
                })
                .then(function(list){
                    var output = '';
                    var checked = '';
                    var color = '';
                    console.log(list);
                    for(var i in list.fuldliste){
                        checked = '';
                        color = 'color:red';
                        for(var a in list.rettigheder){
                            if(list.fuldliste[i].permission_id == list.rettigheder[a].permission_id){
                                checked = 'checked';
                                color = 'color:green';
                            }
                        }
                        output += '<input class="modperm" id="modCheck'+list.fuldliste[i].permission_id+'" type="checkbox" value="'+list.fuldliste[i].permission_id+'" '+checked+' onchange="submitMod(this);" name="checkboxmod[]">' +
                                  '<label for="modCheck'+list.fuldliste[i].permission_id+'" style="'+color+'">'+list.fuldliste[i].permission_name+'</label><br>';
                    }
                    document.getElementById('modPerm').innerHTML = output;
                });
        }
   

    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

    // Get the element with id="defaultOpen" and click on it
    } 
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>