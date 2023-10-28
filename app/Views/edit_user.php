<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<form method="POST" action="<?= base_url('user/' . $user['id']) ?>" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field() ?>
    <h2>Form Edit User</h2>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= $user['nama'] ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= $user['npm'] ?>">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('npm'); ?>
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <select class="form-select mt-2" aria-label="Default select example" name="kelas">
                    <option value="" selected disabled>Pilih Kelas</option>
                    <?php foreach ($kelas as $item) : ?>
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
                <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="100px" height="100px" class="img-fluid rounded-circle">
                <input class="form-control form-control-sm mt-2" id="formFileSm" type="file" name="foto">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
<?= $this->endSection('content') ?>
