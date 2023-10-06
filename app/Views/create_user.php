<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="container">
    <h2 class="mt-5"><?=$title?> </h2>
    <form action="<?= base_url('user/store') ?>" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan">
            <!--
                Atribut pattern="[A-Za-z\s]+" akan memaksa input hanya menerima huruf dan spasi.
                Atribut title digunakan untuk memberikan pesan kesalahan jika pola tidak cocok.
            -->
        </div>

        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm" required pattern="[0-9]+" title="Hanya angka yang diperbolehkan">
            <!--
                Atribut pattern="[0-9]+" akan memaksa input hanya menerima angka.
                Atribut title digunakan untuk memberikan pesan kesalahan jika pola tidak cocok.
            -->
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <select class="form-control" id="kelas" name="kelas">
                <?php foreach($kelas as $item):?>
                    <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                <?php endforeach;?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?=$this->endSection()?>