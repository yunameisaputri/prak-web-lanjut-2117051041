<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<body style="background-color: #bec5cb;"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    </nav>
    
    <div class="jumbotron text-center">
        <h1 class="display-4">Detail Profile</h1>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?=$user['foto']?? '<default-foto>' ?>" width="200px" class="img-fluid rounded-circle" alt="Foto Profil">
            </div>
            <div class="col-md-8">
                <table class="table">
                <tr>
                <td>Nama :</td>
                <td><?= $user['nama'] ?></td>
            </tr>
            <tr>
                <td>NPM :</td>
                <td><?= $user['npm'] ?></td>
            </tr>
            <tr>
                <td>Kelas :</td>
                <td><?= $user['nama_kelas'] ?></td>
            </tr>
                </table>
            </div>
        </div>
    </div>
  
<?=$this->endSection()?>
