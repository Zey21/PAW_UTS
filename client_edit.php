<html>
    <head>
        <title>Client Edit</title>
        <?php
            session_start();

            if($_SESSION['role']!='client' || empty($_SESSION['login'])){
                header("location:index.php");
            }
        ?>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <?php
        include 'koneksi.php';
        ?>
        <?php
            $nama = $_GET['nm'];
            $ruang = $_GET['rm'];
            $di = $_GET['di'];
            $do =$_GET['do'];
        ?>
    </head>
    <body style="background:grey;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="client.php">Hotel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="admin_check.php">Check Order</a></li>
                                <li><a class="dropdown-item" href="www.youtube.com">Youtube</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <span class="navbar-text">
                                <a href="logout.php">Logout</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <div class="d-flex justify-content-between" style="padding:100px;">
                <div class="card" style="width: 22rem;" >
                    <div class="card-body" >
                        <h5 class="card-title">Hi <?=$_SESSION['user']?> !</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Edit Pesanan</h6>
                        <p class="card-text">Pada laman ini akan menampilkan daftar pemesanan yang telah dilakukan oleh customer.</p>
                        <?php
                            echo date("l\, jS \of F Y\, h:i:s A") . "<br>";
                        ?>
                        <a href="admin_check.php" class="card-link">Check Order</a>
                        <a href="www.youtube.com" class="card-link">Youtube</a>
                    </div>
                </div>
                <div class="card" style="width: 80rem;" >
                    <br><br><br><h5 class="card-title" style="text-align:center;">Client edit !</h5> <br>
                    <div style="width:50rem; padding-left:30rem;">
                        <div>
                            <form action="edit.php?nm=<?=$nama;?>&&rm=<?=$ruang;?>" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?=$nama;?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ruangan</label>
                                    <input type="number" min ="1" max="30" class="form-control" name="ruang" value="<?=$ruang;?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date In :</label>
                                    <input type="date" class="form-control" name="masuk" value="<?=$di;?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date Out :</label>
                                    <input type="date" class="form-control" name="keluar" value="<?=$do;?>">
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>