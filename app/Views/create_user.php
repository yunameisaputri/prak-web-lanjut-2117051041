<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<main class="form-signin w-100 m-auto">
  <form method="POST" action="<?= base_url('/user/store') ?>" enctype="multipart/form-data">
    <h2>Form Tambah User</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
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
                <input type="number" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
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
                    <?php
                    foreach ($kelas as $item) {
                    ?>
                        <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
                <label for="formFileSm" class="form-label">Foto</label>
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
</main>
<?= $this->endSection('content') ?>
