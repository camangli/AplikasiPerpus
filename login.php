<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="shortcut icon" href="gambar/SIPO.ico" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<div id="mainlogo"><h1>SIP</h1><p>Sistem Informasi Perpustakaan</p></div>
<div id="baglog">
<div id="login-t">
<h1>Login</h1>
<div id="login">
<form action="ceklogin.php" method="post">
<div id="Conlog">
<label>User</label>
<input type="text"  name="user" class="logu" placeholder="User" required="required"/>
<label>Password</label>
<input type="password" name="pass" class="logp" placeholder="Password" required="required"/>
</div>
<input type="submit" value="Login" name="login" class="button"/>
</form>
</div>
</div>
<div id="foot">Copyright &copy; <?php echo date ("Y");	?> Gunawan</div>
</div>
</div>
</body>
</html>