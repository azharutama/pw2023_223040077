<?php
//navbar actived
define('BASE_URL', '/pw2023_223040077/tubes/');

//koneksi
function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'db_tubes') or die('KONEKSI GAGAL!');
  return $conn;
}

//koneksi
$conn = mysqli_connect('localhost', 'root', '', 'db_tubes');



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
function hapusL($id) //$id diambil diambil dari _get["id"])
{
  $conn = koneksi();
  //setelah mendapat id yang diambil dari get id maka mysql_query akan menjalankan perintah didalamnya
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
function insert($data) //($data diambil diambil dari _post["submit"])
{
  $conn = koneksi();
  //setelah mengambil data kita buat wadah(variable $) untuk masing masing data
  $gambar = $data["gambar"];
  $email = $data['email'];
  $tanggal = $data['tanggal'];
  $laporan = $data['laporan'];

  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  //variable query berisi perintah untuk menambah data
  $query = "INSERT INTO 
            laporan
                  VALUES
                    (null, '$gambar','$email', '$tanggal', '$laporan')";

  //setelah data memiliki wadah masing masing, lakukan query
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


//upload foto
function upload()
{
  $namaFile = $_FILES['gambar']['name']; // Mengambil nama file gambar yang diupload
  $ukuranFile = $_FILES['gambar']['size']; // Mengambil ukuran file gambar yang diupload
  $error = $_FILES['gambar']['error']; // Mengambil kode error jika terjadi kesalahan saat mengupload
  $tmpName = $_FILES['gambar']['tmp_name']; // Mengambil lokasi sementara file gambar yang diupload

  // Cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
    return false;
  }

  // Cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png']; // Daftar ekstensi file gambar yang valid
  $ekstensiGambar = explode('.', $namaFile); // Memisahkan nama file dan ekstensinya
  $ekstensiGambar = strtolower(end($ekstensiGambar)); // Mengambil ekstensi file gambar dan mengubahnya menjadi huruf kecil
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
    return false;
  }

  // Cek ukuran gambar
  if ($ukuranFile > 100000000000) { // Ukuran maksimum yang diizinkan dalam bytes
    echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
    return false;
  }

  // Gambar lolos validasi, siap untuk diupload
  // Buat nama file baru untuk menghindari kemungkinan file dengan nama yang sama
  $namaFileBaru = uniqid(); // Membuat ID unik sebagai bagian dari nama file baru
  $namaFileBaru .= '.'; // Tambahkan tanda titik sebagai pemisah antara ID unik dan ekstensi gambar
  $namaFileBaru .= $ekstensiGambar; // Tambahkan ekstensi gambar ke nama file baru

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru); // Pindahkan file gambar dari lokasi sementara ke folder tujuan dengan menggunakan move_uploaded_file()

  return $namaFileBaru; // Mengembalikan nama file baru yang telah berhasil diupload
}


//function ubah data
function ubah($data)
{
  $conn = koneksi(); // Terhubung ke database menggunakan fungsi koneksi()

  $id = $data["id"]; // Mendapatkan nilai ID berita dari data yang diterima
  $gambarLama = htmlspecialchars($data["gambarLama"]); // Mendapatkan nilai gambar lama dari data yang diterima dan menjaga keamanan dengan htmlspecialchars()
  $judul = htmlspecialchars($data["judul"]); // Mendapatkan nilai judul dari data yang diterima dan menjaga keamanan dengan htmlspecialchars()
  $tanggal = htmlspecialchars($data["tanggal"]); // Mendapatkan nilai tanggal dari data yang diterima dan menjaga keamanan dengan htmlspecialchars()
  $isi = htmlspecialchars($data["isi"]); // Mendapatkan nilai isi berita dari data yang diterima dan menjaga keamanan dengan htmlspecialchars()

  // Cek apakah user memilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama; // Jika tidak ada gambar baru yang dipilih, menggunakan gambar lama
  } else {
    $gambar = upload(); // Jika ada gambar baru yang dipilih, melakukan proses upload gambar menggunakan fungsi upload()
  }

  // Query untuk mengupdate berita sesuai dengan data yang diterima
  $query = "UPDATE berita SET
				gambar = '$gambar',
				judul = '$judul',
				tanggal = '$tanggal',
				isi = '$isi'
			  WHERE id = $id
			";

  mysqli_query($conn, $query); // Menjalankan query update menggunakan mysqli_query()

  return mysqli_affected_rows($conn); // Mengembalikan jumlah baris yang terpengaruh oleh operasi update (biasanya 1 jika sukses)

}



function cari($keyword)
{
  $conn = koneksi(); // Membuat koneksi ke database

  // Membuat query SQL untuk mencari berita berdasarkan keyword yang diberikan
  $query = "SELECT * FROM berita 
            WHERE
            judul LIKE '%$keyword%' OR
            tanggal LIKE '%$keyword%' OR
            isi LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query); // Menjalankan query SQL dan mendapatkan hasilnya

  $rows = []; // Menyiapkan array kosong untuk menyimpan hasil pencarian

  // Mengambil setiap baris hasil query dan menyimpannya dalam array rows
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows; // Mengembalikan array yang berisi hasil pencarian
}


//function registrasi user baru 
// Fungsi registrasi user baru
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
