<!-- Check Login -->

<?php

session_start();

// Username & Password
$username = "revanzayuzar";
$password = "revan123aja";

// Ambil nilai dari form login
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// Periksa apakah username & password benar
if ($input_username == $username && $input_password == $password) {
    // Jika benar, simpan status login ke dalam session
    $_SESSION['login'] = true;
    // Arahkan ke halaman Listing Product
    header("Location: listing_product.php");
}

else {
    // Jika salah, kembalikan ke halaman login
    header("Location: ../../login.php");
}

?>