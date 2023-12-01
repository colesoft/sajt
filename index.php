<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){


if (isset($_SESSION['nivo'])){
                                       switch ($_SESSION['nivo'])
					{
					case 1:
					header("location: prijavakvara/1.php");
					break;
					case 99:
					header("location: pocetak.php");
					break;
					default:
					header("location: index.php");
					}
//header("location: pocetak.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Prijava na sistem</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" align="center">
<h1>Prijava na sistem</h1>
<div id="login" align="center">
<form action="" method="post" align="center">
<label>Korisnicko ime :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Lozinka :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Prijavi se ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
