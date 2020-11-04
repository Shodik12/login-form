<?php
// fungsi untuk memulai session
session_start();

// variabel kosong untuk menyimpan pesan error
$form_error = '';

// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){

    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validasi login benar atau salah
    if($username == 'admin' AND $password == 'admin'){

        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['username'] = $username;
        header('Location:dashboard.php?login=success');
    }else{

        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password or username is wrong !!</p>';
    }
}

?>

<!DOCTYPE html>
<head>
<!-- Required meta tags -->
 <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Login Form</title>
<!-- UIkit CSS --> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" /> <!-- UIkit JS --> <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>

</head>
<body>

    <h3>Login Form</h3>


<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['login'])){
	 if($_GET['login'] == "logout"){
			echo "<div class='uk-alert-success' uk-alert> <a class='uk-alert-close' uk-close></a><p>You have successfully logged out!<span uk-icon='sign-out'></span></p></div>";
		}else if($_GET['login'] == "wrong"){
			echo "<div class='uk-alert-warning' uk-alert> <a class='uk-alert-close' uk-close></a><p>You are not logged in!<span uk-icon='sign-in'></span</p></div>";
		}

	}

	
	?>



<form method="POST" action="" class="pure-form">
    <fieldset>
        <legend><h4>Login Admin</h4></legend>
        <div class="uk-margin">
 <div class="uk-inline"> 
<label>Username:</label>
<span class="uk-form-icon" uk-icon="icon: user"></span>
 <input class="uk-input" name="username"  type="text">
 </div> </div>

 <div class="uk-margin">
 <div class="uk-inline">
<label>Password:</label>
 <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
 <input class="uk-input" name="password" type="text"> </div> </div>

 <?php echo $form_error; ?>
        <button name="submit" type="submit" class="uk-button uk-button-primary"><span uk-icon='sign-in'></span>Login</button>

<br>
Demo
<br>
Username:admin
<br>
Password:admin

    </fieldset>

</form>



   
    
</body>
</html>
