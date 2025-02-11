<?php
require 'functions.php';
// Memasukkan file functions.php yang berisi fungsi-fungsi yang akan digunakan

$nama = 'REGISTER';
// Mendefinisikan variabel $nama dengan nilai 'REGISTER'

// FUNCTION REGISTRASI
if (isset($_POST["register"])) {
    // Mengecek apakah tombol "register" telah diklik

    if (registrasi($_POST) > 0) {
        // Memanggil fungsi registrasi dan memasukkan data dari $_POST ke dalam tabel "users".
        // Jika jumlah baris yang terkena dampak lebih dari 0 (user baru berhasil ditambahkan),

        echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
        // Menampilkan pesan "user baru berhasil ditambahkan" menggunakan JavaScript alert
    } else {
        echo mysqli_error($conn);
        // Menampilkan pesan error dari MySQL jika terjadi kesalahan dalam eksekusi query
    }
}

require('views/register.view.php');
// Memasukkan file register.view.php yang berisi tampilan HTML dan kode untuk menampilkan halaman registrasi