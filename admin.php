<html>
    <head>
        <title>Admin</title>
        <?php
            session_start();

            if($_SESSION['role']!='admin' || empty($_SESSION['login'])){
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
                <a class="navbar-brand" href="admin.php">Hotel</a>
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
        <div style="padding:100px;">
            <div class="card" style="width: 22rem;" >
                <div class="card-body" >
                    <h5 class="card-title">Hi Admin !</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Selamat datang kembali ^ ^</h6>
                    <p class="card-text">Semoga harimu baik-baik saja, dan ini beberapa fitur yang tersedia</p>
                    <?php
                        echo date("l\, jS \of F Y\, h:i:s A") . "<br>";
                    ?>
                    <a href="admin_check.php" class="card-link">Check Order</a>
                    <a href="www.youtube.com" class="card-link">Youtube</a>
                </div>
            </div>
        </div>
    </body>
</html>