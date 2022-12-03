<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<!-- <img src="img/bg.svg"> -->
		</div>
		<div class="login-content" >
			<form action="" method="post">
				<!-- <img src="img/avatar.svg"> -->
				<h2 class="title">Pengunjung</h2>
           		<div class="input-div one"> 	
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="regis.php"> Daftar</a>
            	<input type="submit" name="Login" value="Login" class="btn">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
session_start();
    require 'koneksi.php';

    if(isset($_POST['Login'])){
       
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM akun WHERE username='$username' OR email='$username'";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);

        if(password_verify($password,$row['psw'])){

            $_SESSION['Login'] = true;
            echo"
                <script>
                    alert('Selamat Datang $user');
                    document.location.href = 'index1.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Username dan Password Salah');
                </script>
            ";
        }
    }
?>
