<!-- Logout -->

<?php

session_start();

// Hapus semua informasi sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Arahkan kembali ke halaman login
header("Location: ../../login.php");
exit;

?>