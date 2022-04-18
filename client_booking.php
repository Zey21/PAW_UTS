<html>
    <head>
        <title>Client Booking</title>
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
                            <a class="nav-link active" aria-current="page" href="client.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Booking</a></li>
                                <li><a class="dropdown-item" href="#">My Info</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item" style="padding-right:10px;">
                            <span class="navbar-text">
                                <p>Hi <a href="client.php"><?=$_SESSION['user']?></a> !</p>
                            </span>
                        </li>
                        <li class="nav-item">
                            <span class="navbar-text">
                                <a href="logout.php">Logout</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-between" style="padding:100px;">
            <div class="card" style="width: 22rem;" >
                <div class="card-body" >
                    <h5 class="card-title">Hi <?=$_SESSION['user']?> !</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Silahkan.. pilih ruanganmu</h6>
                    <p class="card-text">Untuk ruangan dari nomor 01 - 10 : Rp. 80.000,-/day<br>Fasilitas : Single Bed, AC, TV, Wifi, Kamar Mandi, Handuk</p>
                    <p class="card-text">Untuk ruangan dari nomor 11 - 20 : Rp. 100.000,-/day<br>Fasilitas : Single Bed, AC, TV, Wifi, Kamar Mandi, Handuk, 1x Voucher Makan</p>
                    <p class="card-text">Untuk ruangan dari nomor 21 - 30 : Rp. 120.000,-/day<br>Fasilitas : Single Bed, AC, TV, Wifi, Kamar Mandi, Handuk, 2x Voucher Makan, 1x Voucher Kopi</p>
                    <p class="card-text">Dan untuk pembayaran harap dilakukan di customer service, jika pada hari penjadwalan pelanggan tidak membayar maka akan dinyatakan hangus.</p>
                    <?php
                        echo date("l\, jS \of F Y\, h:i:s A") . "<br>";
                    ?>
                    <a href="#.php" class="card-link">Booking</a>
                    <a href="#" class="card-link">My Info</a>
                </div>
            </div>
            <div class="card" style="width: 80rem;" >
                <br><br><br><h5 class="card-title" style="text-align:center;">Order here !</h5> <br>
                <div style="width:50rem; padding-left:30rem;">
                    <div>
                        <form action="action.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ruangan</label>
                                <input type="number" min ="1" max="30" class="form-control" name="ruang">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date In :</label>
                                <input type="date" class="form-control" name="masuk">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date Out :</label>
                                <input type="date" class="form-control" name="keluar">
                            </div>
                            <button type="submit" class="btn btn-secondary" name="unik" value="<?=$_SESSION['user']?>">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>