<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
<h2>List Kelas</h2> 
    <button class="btn btn-success" onclick="window.location.href='<?= base_url('kelas/create') ?>';">Tambah Data</button>

      <table class="table align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kelas</th>
                <th>Kapasitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kelas as $kelas){
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kelas['nama_kelas'] ?></td>
                    <td><?= $kelas['kapasitas'] ?></td>

                    <td>
                            <a href="<?= base_url('kelas/'. $kelas['id']) ?>" class="btn btn-info">Detail</a>
                            <a href="<?= base_url('kelas/'. $kelas['id']. '/edit') ?>" class="btn btn-primary">Edit</a>
                            <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
            <?php
            }
            ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?= $this->endSection('content') ?>