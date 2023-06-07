<?php

define('BASE_URL', '/pw2023_223040077/tubes/');
$conn = mysqli_connect('localhost', 'root', '', 'db_tubes');
function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'db_tubes') or die('KONEKSI GAGAL!');
  return $conn;
}




function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

//tambah untuk laporan
function tambah($data)
{
  $conn = koneksi();

  $gambar = $data["gambar"];
  $email = $data['email'];
  $tanggal = $data['tanggal'];
  $laporan = $data['laporan'];


  $query = "INSERT INTO 
            laporan
                  VALUES
                    (null, '$gambar','$email', '$tanggal', '$laporan')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

//tambah untuk users
function insert($data)
{
  $conn = koneksi();

  $gambar = $data["gambar"];
  $email = $data['email'];
  $tanggal = $data['tanggal'];
  $laporan = $data['laporan'];


  $query = "INSERT INTO 
            laporan
                  VALUES
                    (null, '$gambar','$email', '$tanggal', '$laporan')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapusL($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM laporan WHERE id = $id ");
  return mysqli_affected_rows($conn);
}

function hapusU($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM users WHERE id = $id ");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar = $data["gambar"];
  $email = $data['email'];
  $laporan = $data['laporan'];

  $query = " UPDATE  laporan
           SET  gambar = '$gambar',
                email = '$email',
				        laporan = '$laporan'
			     WHERE id = $id
			";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM laporan
				WHERE
			  email LIKE '%$keyword%' OR
			  tanggal LIKE '%$keyword%' OR
			  laporan LIKE '%$keyword%'
			
			";
  return query($query);
}

function registrasi($data)
{
  $conn = koneksi();

  $username = strtolower(stripslashes($data["username"]));
  $email = strtolower(stripslashes($data["email"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
    return false;
  }


  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan userbaru ke database
  mysqli_query($conn, "INSERT INTO users VALUES( id, '$username','$email', '$password')");

  return mysqli_affected_rows($conn);
}

function dd($value)
{

  echo "<pre>";
  var_dump($value);


  echo  "</pre>";
  die();
}

function uriIs($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}
