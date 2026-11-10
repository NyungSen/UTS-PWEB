<?php
session_start();
    // Cek apakah user sudah login atau belum
    if (!isset($_SESSION['username'])) {
        header("location:halamanlogin.php");
        exit;
    }
    $name = $_SESSION['username'];
?>

<html>
    <head>
        <title>Halaman Utama</title>
    </head>
    <body>
        <h1>Selamat datang, <?php echo $name; ?></h1>
        <p><a href="halamanlogin.php">Back ke Home</a></p>
    </body>
</html>