<?php
session_start();
$_SESSION = array();
session_destroy();
session_start();
$_SESSION['logout_message'] = "ログアウトしました。";
header('Locastion: login.php');
exit();