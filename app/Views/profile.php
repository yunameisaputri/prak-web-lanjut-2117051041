<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<body style="background-color: #bec5cb;"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Profile Page</a>
    </nav>
    
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Profil Anda</h1>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://avatars.githubusercontent.com/u/92523388?v=4" width="200px" class="img-fluid rounded-circle" alt="Foto Profil">
            </div>
            <div class="col-md-8">
                <table class="table">
                <tr>
                <td>Nama :</td>
                <td><?=$nama?></td>
            </tr>
            <tr>
                <td>NPM :</td>
                <td><?=$npm?></td>
            </tr>
            <tr>
                <td>Kelas :</td>
                <td><?=$kelas?></td>
            </tr>

                </table>
            </div>
        </div>
    </div>
  
<?=$this->endSection()?>
