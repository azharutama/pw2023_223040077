<?php
//navbar actived
define('BASE_URL', '/pw2023_223040077/tubes/');


//koneksi
$conn = mysqli_connect('localhost', 'root', '', 'db_tubes');

//koneksi
function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'db_tubes') or die('KONEKSI GAGAL!');
  return $conn;
}



//querry
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}



//function hapus laporan
function hapusL($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM laporan WHERE id = $id ");
  return mysqli_affected_rows($conn);
}

//function hapus berita
function hapusB($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM berita WHERE id = $id ");
  return mysqli_affected_rows($conn);
}

//function hapus Users
function hapusU($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM users WHERE id = $id ");
  return mysqli_affected_rows($conn);
}

//function menambah laporan
function insert($data)
{
  $conn = koneksi();

  $gambar = $data["gambar"];
  $email = $data['email'];
  $tanggal = $data['tanggal'];
  $laporan = $data['laporan'];

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
            laporan
                  VALUES
                    (null, '$gambar','$email', '$tanggal', '$laporan')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


//function menambah berita
function tambah($data)
{
  $conn = koneksi();


  $judul = htmlspecialchars($data["judul"]);
  $tanggal = htmlspecialchars($data["tanggal"]);
  $isi = htmlspecialchars($data["isi"]);

  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO berita
				VALUES
			  (null, '$gambar', '$judul', '$tanggal', '$isi')
			";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  //cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
    return false;
  }

  // cek ukuran
  if ($ukuranFile > 100000000000) {
    echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
    return false;
  }

  // lolos, gambar siap
  //buat nama file baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}


//function ubah berita
function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $judul = htmlspecialchars($data["judul"]);
  $tanggal = htmlspecialchars($data["tanggal"]);
  $isi = htmlspecialchars($data["isi"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $query = "UPDATE berita SET

				gambar = '$gambar',
				judul = '$judul',
				tanggal = '$tanggal',
				isi = '$isi'
			  WHERE id = $id
			";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//funnction cari tanpa live searching
function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM berita 
            WHERE
            judul LIKE '%$keyword%' OR
            tanggal LIKE '%$keyword%' OR
            isi LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


//function registrasi user baru 
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
        alert('Username sudah terdaftar!');
      </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
        alert('Konfirmasi password tidak sesuai!');
      </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  $query = "INSERT INTO users (username, email, password, role_id) VALUES ('$username', '$email', '$password', 2)";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function dd($value)
{

  echo "<pre>";
  var_dump($value);


  echo  "</pre>";
  die();
}


//function requeest uri untuk navbar
function uriIs($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}
