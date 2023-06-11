<?php

session_start();
require('functions.php');

$nama = 'LOGIN';
//COOKIE
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username dan role berdasarkan id
  $result = mysqli_query($conn, "SELECT users.username, roles.role_name FROM users JOIN roles ON users.role_id = roles.id WHERE users.id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role_name'];
  }
}

//LOGIN 
if (isset($_SESSION["login"])) {
  if ($_SESSION['role'] === 'admin') {
    header("Location: admin.php");
  } else {
    header("Location: index.php");
  }
  exit;
}

//FUNCTION LOGIN
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT users.*, roles.role_name FROM users JOIN roles ON users.role_id = roles.role_id WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // cek password
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;
      $_SESSION["username"] = $row["username"];
      $_SESSION["role"] = $row["role_name"];

      // cek remember me
      if (isset($_POST['remember'])) {
        // buat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      //CEK ROLE
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



require('views/login.view.php');
