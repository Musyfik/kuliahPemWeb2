<?php
//staticvariabel
$user='admin';
$pass=md5('admin');
//memulaisession
session_start();
//ceklogin
if(isset($_COOKIE['login']))
{
if($_COOKIE['login']==$user)
{
//jikavalid,setsessionlogin
$_SESSION['login']=TRUE;
header('location:./home.php');
exit();
}
}
?>
<!DOCTYPEhtml>
<html>
<head>
<metacharset="utf-8">
<title>LoginRememberMe</title>
</head>
<body>
<form action="aksi.php"method="post">
<p><label for="username">Username:</label><input value='admin' type="text"
name="username"/></p>
<p><label for="password">Password:</label><input value='admin' type="password"
name="password"/></p>
<p><label for="remember"><input type="checkbox"name="remember"
value="true"/>RememberMe</label></p>
<p>
<button type="submit"name="login">Login</button>
<button type="reset"name="reset">Reset</button>
</p>
</form>
</body>
</html>