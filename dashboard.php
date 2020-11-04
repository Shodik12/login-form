<?php
session_start();

// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['username']) ){
    header('Location: index.php?login=wrong');
}

?>

<!DOCTYPE html>
<head>
    <title>Dashboard </title>
<!-- Required meta tags -->
 <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Login Form</title>
<!-- UIkit CSS --> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" /> <!-- UIkit JS --> <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['login'])){
	 if($_GET['login'] == "success"){
			echo "<div class='uk-alert-success' uk-alert> <a class='uk-alert-close' uk-close></a><p>You have successfully logged in!<span uk-icon='sign-in'></span></p></div>";
		}

	}

	
	?>

<div class="container-fluid">
<div class="uk-card uk-card-default uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="https://img2.pngio.com/open-avatar-vector-icon-boy-png-image-transparent-png-free-avatar-vector-png-820_860.png">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Welcome <?php echo $_SESSION['username']; ?></h3>
                <p class="uk-text-meta uk-margin-remove-top"><?php $tanggal= mktime(date("m"),date("d"),date("Y")); echo "<span uk-icon='calendar'></span>Date : <b>".date("d-M-Y", $tanggal)."</b> </br>"; date_default_timezone_set('Asia/Jakarta'); $jam=date("H:i:s"); echo " <span uk-icon='clock'></span>Time : <b>". $jam." "."</b>"; $a = date ("H"); if (($a>=6) && ($a<=11)){ echo "<b>, Good Morning !!</b>"; } else if(($a>11) && ($a<=15)) { echo ", Good Morning !!";} else if (($a>15) && ($a<=18)){ echo ", Good Afternoon !!";} else { echo ", <b> Good Night !!</b>";} ?> </p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="uk-card-footer">
        <a href="logout.php?login=logout" class="uk-button uk-button-warning"><span uk-icon='sign-out'></span>Logout</a>

   

    </div>
</div>
</div>


    
</body>
</html>
