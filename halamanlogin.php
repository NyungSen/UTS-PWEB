<?php
session_start();
$pesan= "";
$usnpw =[
    "Andi" => 1234,
    "Budi" => 4567,
    "Sandi" => 7864,
    "Ali" =>  8734
];

if (isset($_POST["btnlogin"])){
    $user= $_POST["inputuser"] ?? "";
    $pass= $_POST["inpass"] ?? "";

    if (isset($usnpw[$user]) && $usnpw[$user] == $pass) {
        $_SESSION["username"] = $user;
        $_SESSION["password"]= $pass;
        header("location:halamanlogin1.php");
        exit;
    } else {
        $pesan = "Username atau password salah!";
    }

}

?>
<html>
    <head>
        <title>Halaman Login</title>
    </head>

    <body>
    <h2>Sistem Login UTS Web PHP</h2>
    <h3>Silahkan masuk ke Akun anda</h3>
    <p style="color: red;"><?php echo $pesan; ?></p>

        <form action="" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="inputuser" placeholder="Masukkan username" required>
            <br><br>

            <label for="inpass">Password:</label><br>
            <input type="password" name="inpass" placeholder="Masukkan password" required>
            <br><br>

            <input type="submit" value="Login" name="btnlogin">
        </form>
    </body>
</html>

<html>
    <form action="masterbarang.php" method="post">
    <input type="submit" value="masterbarang" name="btnlogin">
</form>
</html>
