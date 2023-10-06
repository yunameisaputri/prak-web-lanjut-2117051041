<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <h2>List User</h2> 

    <table class="table align-middle">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
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
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
    </table>
<?= $this->endSection() ?>