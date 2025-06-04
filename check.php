<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['user_name'] = $_POST['user'];
    $_SESSION['password'] = $_POST['pass'];
    $pdo = new PDO('mysql:host=mysql304.phy.lolipop.lan;dbname=LAA1553904-nomura;charset=utf8', 'LAA1553904', 'nomukasu');
    $sql = $pdo->prepare('SELECT * FROM user WHERE password = ? AND username = ?');
    $sql->execute($_POST['pass'], $_POST['user']);
    $res = $SQL->fetch(PDO::FETCH_ASSOC);
    if ($res) {
        $_session['user_name'] = $res['username'];
        $_session['password'] = $res['password'];
        header("Location: form.php");
    }
    header("Location: login.php");
    ?>
</body>

</html>