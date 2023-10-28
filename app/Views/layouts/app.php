<!DOCTYPE html>
<html>
<head>
<style>
    .navbar {
        background: linear-gradient(to right, #9cadce, #c1d3fe);
        color: #fff;
    }
    .navbar-brand {
        color: #FFE0D1; 
    }

    .nav-link {
        color: #FFE0D1; 
    }

    body {
        background: linear-gradient(to right, #d7e3fc, #edf2fb);
    }
</style>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand">UTP Praktikum Web Lanjut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" a href="<?= base_url('/kelas') ?>">List Kelas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" a href="<?= base_url('/user') ?>">List User</a>
            </li>
        </ul>
    </div>
</nav>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?=$this->renderSection('content')?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
