<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">


</head>

<body>
    <div class="container-side ">
        <div class="sidebar">
            <div class="position-fixed">
                <div class="header">
                    <div class="list-item">
                        <a href="">
                            <img src="../assets/Explore.png" alt="" class="icon">
                            <span class="description-header">Top Football Player</span>
                        </a>
                    </div>
                    <div class="illustration">
                        <img src="../assets/10586 1.png" alt="">
                    </div>
                </div>
                <div class="main">
                    <div class="list-item">
                        <a href="../homePage/index.php">
                            <img src="../assets/Dashboard.png" alt="" class="icon">
                            <span class="description">Dashboard</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="../playerPage/index.php">
                            <img src="../assets/Team.png" alt="" class="icon">
                            <span class="description">Player</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="../clubPage/index.php">
                            <img src="../assets/Category.png" alt="" class="icon">
                            <span class="description">Club</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="../positionPage/index.php">
                            <img src="../assets/Analytics.png" alt="" class="icon">
                            <span class="description">Position</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="../overallPage/index.php">
                            <img src="../assets/Event.png" alt="" class="icon">
                            <span class="description">Overall</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="../recapPage/index.php">
                            <img src="../assets/History.png" alt="" class="icon">
                            <span class="description">Recap</span>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="../loginPage/logout.php">
                            <i class="bi bi-box-arrow-left icon text-white"></i>
                            <span class="description">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="container col-md-9 mt-4">
                <h1 class="text-center">TABEL FOOTBALL PLAYER</h1>
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <a href="tambah.php" class="btn btn-sm btn-warning float-right"><i class="bi bi-bookmark-plus-fill"></i></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Name Player</th>
                                    <th>Age</th>
                                    <th>Price</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include('../koneksi/koneksi.php');
                                $datas = mysqli_query($koneksi, "SELECT * FROM `player` WHERE 1") or die(mysqli_error($koneksi));
                                $no = 1;

                                foreach ($datas as $row) {
                                    echo "<tr>";

                                    echo "<td class='text-center'>" . $no++ . "</td>";
                                    echo "<td>" . $row['nam_player'] . "<?td>";
                                    echo "<td class='text-center'>" . $row['age'] . "<?td>";
                                    echo "<td> € " . $row['price'] . "<?td>";
                                    echo "<td>" . $row['country'] . "<?td>";

                                    echo "<td class='d-flex justify-content-center d-flex gap-2'>";
                                    echo "<a class='btn btn-sm btn-dark' href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                                    echo "<a class='btn btn-sm btn-warning' onclick='return confirm('Anda yakin ingin hapus?');' href='hapus.php?id=" . $row['id'] . "'>Hapus</a>";
                                    echo "</td>";

                                    echo "</tr>";
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>