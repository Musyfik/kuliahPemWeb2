<?php
session_start();
session_unset();
session_destroy();

header('Location: tugas.php');
exit();
?>
