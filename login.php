<?php
// cek tombol submit
if (isset($_POST["submit"])){
    // cek username dan pass
    if ($_POST["username"] == "admin" && $_POST["password"] == "123"){
    // jika benar makan redirect ke hal admin
    header("Location: admin.php");
    exit;
    } else
    // jika salah muncul notif error 
    $eror = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hal Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if (isset($eror)) : ?>
    <p style="color: red; font-style:italic;"> Username / password anda salah</p>
    <?php endif; ?>

    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>