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
    <h1 class="text-center">TABEL ADD OVERALL</h1>
        <div class="card col mt-4">
            <div class="card-header bg-dark text-white">
                ADD OVERALL COLUMNS
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Rating</label>
                        <input type="text" name="rating" require="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Potency</label>
                        <input type="number" name="potency" class="form-control">
                    </div>
                    <button class="btn btn-dark mt-3" type="submit" name="submit" value="simpan">Simpan Data</button>
                </form>
                <?php 
            
                include('../koneksi.php');

                if (isset($_POST['submit'])) {
                    $rating = $_POST['rating'];
                    $potency = $_POST['potency'];

                    $datas = mysqli_query($koneksi, "insert into overall (rating, potency)
                    values('$rating', '$potency')")
                    or die(mysqli_error($koneksi));

                    echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
                }

                ?>
            </div>      
        </div>    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>

</body>
</html>