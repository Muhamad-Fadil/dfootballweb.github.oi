<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Player</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>

    <div class="container col-md-7 mt-4">
        <h1 class="text-center">TABEL ADD CLUB</h1>
        <div class="card col mt-4">
            <div class="card-header bg-dark text-white">
                ADD CLUB COLUMNS
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Logos</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Name Club</label>
                        <input type="text" name="name" require="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri" class="form-control">
                    </div>
                    <button class="btn btn-dark mt-3" type="submit" name="submit" value="simpan">Simpan Data</button>
                </form>
                <?php

                include('../koneksi.php');

                if (isset($_POST['submit'])) {
                    $logo = $_POST['logo'];
                    $club = $_POST['name'];
                    $tahunBerdiri = $_POST['tahun_berdiri'];

                    $datas = mysqli_query($koneksi, "insert into club (name, logo, tahun_berdiri)
                    values('$club', '$logo', '$tahunBerdiri')")
                        or die(mysqli_error($koneksi));

                    echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
                }

                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</body>

</html>