<?php
//memulaisession
session_start();
//ceksession
if(!isset($_SESSION['login']))
{
header('location:./login.php');
}
?>
<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
<title>HomeRememberMe</title>
</head>
<body>
<h5>Selamat datang di halaman utama website</h5>
<p><a href="./logout.php">Logout</a></p>
</body>
</html>