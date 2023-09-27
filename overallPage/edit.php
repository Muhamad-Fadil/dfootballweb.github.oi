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
        <h1 class="text-center">TABEL EDIT OVERALL</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
                EDIT OVERALL COLUMNS
            </div>
            <div class="card-body">
                <?php

                include('../koneksi/koneksi.php');

                $id = $_GET['id'];

                $data = mysqli_query($koneksi, "select * from overall where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>

                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Rating</label>
                        <input type="number" name="rating" required class="form-control" value="<?= $row['rating']; ?>">


                        <input type="hidden" name="id" required value="<?= $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Potency</label>
                        <input type="number" name="potency" class="form-control" value="<?= $row['potency']; ?>">
                    </div>
                    <button class="btn btn-dark mt-3" type="submit" name="submit" value="simpan">Update Data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $rating = $_POST['rating'];
                    $potency = $_POST['potency'];

                    mysqli_query($koneksi, "update overall set rating='$rating', potency='$potency'
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