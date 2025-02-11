<?php
//FUNCTION LOGOUT
session_start();
// Memulai session

$_SESSION = [];
// Mengosongkan semua data dalam variabel $_SESSION

session_unset();
// Menghapus semua variabel sesi

session_destroy();
// Menghancurkan sesi

header("Location: login.php");
// Mengarahkan pengguna ke halaman login.php

exit;
// Menghentikan eksekusi skrip
