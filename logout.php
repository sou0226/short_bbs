<?php
session_start();
$_SESSION = array();
session_destroy();
header('Locastion: login.php');
exit();
