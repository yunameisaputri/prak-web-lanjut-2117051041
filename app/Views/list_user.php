<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="container">
<h2>List User</h2> 
    <button class="btn btn-success" onclick="window.location.href='<?= base_url('user/create') ?>';">Tambah Data</button>

    <table class="table align-middle">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($users as $user){
                ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td><img src="<?=$user['foto']?? '<default-foto>' ?>" width="100px"; height="100px" class="img-fluid rounded-circle" alt="Foto Profil"></td>
                        <td></td>
                        <td>
                            <a href="<?= base_url('user/'. $user['id']) ?>" class="btn btn-info">Detail</a>
                            <a href="<?= base_url('user/'. $user['id']. '/edit') ?>" class="btn btn-primary">Edit</a>
                            <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
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
<?= $this->endSection() ?>