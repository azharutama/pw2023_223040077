<?php
require '../functions.php';

//live searching untuk halaman admin
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
           berita
           WHERE 
           judul LIKE '%$keyword%' OR
           tanggal LIKE '%$keyword%' OR
           isi LIKE '%$keyword%'
           ";

$news = query($query);
?>
<?php if ($news) : ?>
  <div class="display-4 mb-5">Data Berita</div>
  <table class="table table table-bordered border-DARK">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">gambar</th>
        <th scope="col">judul</th>
        <th scope="col">tanggal</th>
        <th scope="col">isi</th>
        <th scope="col">aksi</th>

      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($news as $n) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>

          <td><img src="img/<?= $n['gambar']; ?>" width="50"></td>
          <td><?= $n['judul']; ?></td>
          <td><?= $n['tanggal']; ?></td>
          <td><?= $n['isi']; ?></td>
          <td>
            <a href="ubah.php?id=<?= $n['id']; ?>" class="badge text-bg-primary">ubah</a> |
            <a href="hapus.php?id=<?= $n['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">hapus</a>

          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else :  ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        data not found!
      </div>
    </div>
  </div>
<?php endif; ?>