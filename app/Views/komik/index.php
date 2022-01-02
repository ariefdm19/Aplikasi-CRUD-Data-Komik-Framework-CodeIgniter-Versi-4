<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
          <a href="/komik/create" class="btn btn-primary mt-3">Tambah Data Komik</a>
            <h1 class="mt-2">Daftar Komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success" role="alert">
  <?= session()->getFlashdata('pesan'); ?>
</div>
              <?php endif;  ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
      <?php foreach ($komik as $k) : {
          # code...
      }?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
      <td><?= $k['judul']; ?></td>
      <td>
          <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endForeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>