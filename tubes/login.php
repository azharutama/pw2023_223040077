<?php
session_start();
require('functions.php');
// Memulai session dan memasukkan file functions.php yang berisi fungsi-fungsi yang akan digunakan

$nama = 'LOGIN';
// Mendefinisikan variabel $nama dengan nilai 'LOGIN'

// COOKIE
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // Ambil username dan role berdasarkan id
  $result = mysqli_query($conn, "SELECT users.username, roles.role_name FROM users JOIN roles ON users.role_id = roles.id WHERE users.id = $id");
  $row = mysqli_fetch_assoc($result);

  // Cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role_name'];
  }
}

// LOGIN
if (isset($_SESSION["login"])) {
  if ($_SESSION['role'] === 'admin') {
    header("Location: admin.php");
  } else {
    header("Location: index.php");
  }
  exit;
}
// Jika pengguna sudah login dan memiliki role 'admin', akan diarahkan ke halaman admin.php.
// Jika pengguna sudah login dan bukan admin, akan diarahkan ke halaman index.php.

// FUNCTION LOGIN
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT users.*, roles.role_name FROM users JOIN roles ON users.role_id = roles.role_id WHERE username = '$username'");

  // Cek username
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Cek password
    if (password_verify($password, $row["password"])) {
      // Set session
      $_SESSION["login"] = true;
      $_SESSION["username"] = $row["username"];
      $_SESSION["role"] = $row["role_name"];

      // Cek remember me
      if (isset($_POST['remember'])) {
        // Buat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      // Cek role
      if ($row['role_name'] === 'admin') {
        header("Location: admin.php");
      } else {
        header("Location: index.php");
      }
      exit;
    }
  }

  $error = true;
}
// Jika pengguna melakukan submit form login, akan melakukan proses verifikasi username dan password.

require('views/login.view.php');
// Memasukkan file login.view.php yang berisi tampilan HTML dan kode untuk menampilkan halaman login