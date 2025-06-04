<form action="login.php" method="post">
    <button type="submit" name="select"></button>
</form>
<?php
session_start();
$_SESSION = array();
session_destroy();
header('Locastion: login.php');
exit();
