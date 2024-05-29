<?php
/****************************************************
Membuat
session
*****************************************************/
session_start();
if(isset($_POST['Login'])){
$user1 =$_POST['user'];
$pass1 =$_POST['pass'];
//cek login
if($user1=="rahadian" && $pass1 =="123"){
//membuat session
$_SESSION['login']=$user1;
//menujukehalamanpemeriksaansession
echo"<h1>AndaberhasilLOGIN</h1>";
echo"<h2>Klik<a href='session2.php'>disini
(session2.php)</a>
untuk menuju ke halaman pemeriksaan session";
}
}else{
}
?>
<html>
<head>
<title>Loginhere...</title>
</head>
<body>
<form action=""method="post">
<h2>LoginHere...</h2>
Username:<input type="text"name="user"><br>
Password:<input type="password"name="pass"><br>
<input type="submit"name="Login"value="LogIn">
</form>
</body>
</html>