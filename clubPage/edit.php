<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>

    <div class="container col-md-7 mt-4">
        <h1 class="text-center">TABEL EDIT CLUB</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
                EDIT CLUB COLUMNS
            </div>
            <div class="card-body">
                <?php

                include('../koneksi.php');

                $id = $_GET['id'];

                $data = mysqli_query($koneksi, "select * from club where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>

                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Logos</label>
                        <input type="file" name="logo" class="form-control" value="<?= $row['logo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Name Club</label>
                        <input type="text" name="name" required class="form-control" value="<?= $row['name']; ?>">


                        <input type="hidden" name="id" required value="<?= $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Since</label>
                        <input type="text" name="tahun_berdiri" class="form-control" value="<?= $row['tahun_berdiri']; ?>">
                    </div>
                    <button class="btn btn-dark mt-3" type="submit" name="submit" value="simpan">Update Data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $logo = $_POST['logo'];
                    $club = $_POST['name'];
                    $since = $_POST['tahun_berdiri'];

                    mysqli_query($koneksi, "update club set name='$club', logo='$logo', tahun_berdiri='$since'
                where id ='$id'") or die(mysqli_error($koneksi));

                    echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
                }

                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</body>

</html>