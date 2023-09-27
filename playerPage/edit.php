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
        <h1 class="text-center">TABEL EDIT PLAYER</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
                EDIT PLAYER COLUMNS
            </div>
            <div class="card-body">
                <?php

                include('../koneksi.php');

                $id = $_GET['id'];

                $data = mysqli_query($koneksi, "select * from player where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>

                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="">Name Player</label>
                        <input type="text" name="nam_player" required class="form-control" value="<?= $row['nam_player']; ?>">

                        <input type="hidden" name="id" required value="<?= $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Club ID</label>
                        <!-- <input type="number" name="club_id" class="form-control" value=""> -->
                        <select name="club_id" require="" class="form-control">
                            <option value=1>1. Real Madrid</option>
                            <option value=2>2. Manchester United</option>
                            <option value=3>3. Bayern Munchen</option>
                            <option value=4>4. Barcelona</option>
                            <option value=5>5. Manchester City</option>
                            <option value=6>6. Liverpool</option>
                            <option value=7>7. AC Milan</option>
                            <option value=8>8. Arsenal</option>
                            <option value=9>9. Chelsea</option>
                            <option value=10>10. Tottenham Hotspur</option>
                            <option value=11>11. Paris Saint-Germain</option>
                            <option value=12>12. Borussia Dortmund</option>
                            <option value=13>13. Al-Nassr</option>
                            <option value=14>14. Al-Hilal</option>
                            <option value=15>15. Inter Miami</option>
                            <option value=16>16. Al-Ittihad</option>
                            <option value=17>17. Atletico Madrid</option>
                            <option value=18>18. Napoli</option>
                            <option value=19>19. Juventus</option>
                            <option value=20>20. Inter Milan</option>
                            <option value=21>21. A.S. Roma</option>
                            <option value=22>22. Sevilla FC</option>
                            <?php
                            foreach ($data as $pilihClub) {
                                $selected = ($pilihClub['name'] == $pilihClub['name']) ? 'selected' : '';
                            ?>
                                <option value="<?= $pilihClub['name'] ?>" <?= $selected ?>><?= $pilihClub['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="country" class="form-control" value="<?= $row['country']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="number" name="age" class="form-control" value="<?= $row['age']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Position ID</label>
                        <!-- <input type="number" name="position_id" class="form-control" value=""> -->
                        <select name="position_id" require="" class="form-control">
                            <option value=1>1. Forward</option>
                            <option value=2>2. Midfielder</option>
                            <option value=3>3. Defender</option>
                            <option value=4>3. Goalkeeper</option>
                            <?php
                            foreach ($dataP as $pilihP) {
                                $selected = ($pilihP['position'] == $pilihP['position']) ? 'selected' : '';
                            ?>
                                <option value="<?= $pilihP['position'] ?>" <?= $selected ?>><?= $pilihP['position'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" value="<?= $row['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Rating ID</label>
                        <input type="number" name="rating_id" class="form-control" value="<?= $row['rating_id']; ?>">
                    </div>
                    <button class="btn btn-dark mt-3" type="submit" name="submit" value="simpan">Update Data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $nama = $_POST['nam_player'];
                    $club = $_POST['club_id'];
                    $country = $_POST['country'];
                    $age = $_POST['age'];
                    $position = $_POST['position_id'];
                    $price = $_POST['price'];
                    $rating = $_POST['rating_id'];

                    mysqli_query($koneksi, "update player set nam_player='$nama', club_id='$club', country='$country', age='$age', position_id='$position', price='$price', rating_id='$rating' 
                where id ='$id'") or die(mysqli_error($koneksi));

                    echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
                }

                ?>

                <?php
                $data = [
                    'database_football' => 'club_id'
                ];
                ?>

                <?php
                $dataP = [
                    'database_football' => 'position_id'
                ];
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</body>

</html>