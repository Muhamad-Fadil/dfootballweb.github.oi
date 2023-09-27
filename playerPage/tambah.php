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
        <h1 class="text-center">TABEL ADD PLAYER</h1>
        <div class="col mt-4">
            <!-- <div class="card col-1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Code ID Club</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Keterangan :</h6>
                    <p class="card-text">1. Real Madrid</p>
                    <p class="card-text">2. Manchester United</p>
                    <p class="card-text">3. Bayern Munchen</p>
                    <p class="card-text">4. Barcelona</p>
                    <p class="card-text">5. Manchester City</p>
                    <p class="card-text">6. Liverpool</p>
                    <p class="card-text">7. AC Milan</p>
                    <p class="card-text">8. Arsenal</p>
                    <p class="card-text">9. Chelsea</p>
                    <p class="card-text">10. Tottenham Hotspur</p>
                    <p class="card-text">11. Paris Saint-Germain</p>
                    <p class="card-text">12. Borussia Dortmund</p>
                    <p class="card-text">13. Al-Nassr</p>
                    <p class="card-text">14. Al-Hilal</p>
                    <p class="card-text">15. Inter Miami</p>
                    <p class="card-text">16. Al-Ittihad</p>
                    <p class="card-text">17. Atletico Madrid</p>
                    <p class="card-text">18. Napoli</p>
                    <p class="card-text">19. Juventus</p>
                    <p class="card-text">20. Inter Milan</p>
                    <p class="card-text">21. A.S. Roma</p>
                    <p class="card-text">22. Sevilla FC</p>
                </div>
            </div> -->
            <div class="card">
                <div class="card-header bg-dark text-white">
                    ADD PLAYER COLUMNS
                </div>
                <div class="card-body">
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label for="">Name Player</label>
                            <input type="text" name="nam_player" require="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Club ID</label>
                            <!-- <input type="number" name="club_id" class="form-control"> -->
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
                        <div class="form-group mb-4">
                            <label for="">Country</label>
                            <input type="text" name="country" require="" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Age</label>
                            <input type="number" name="age" require="" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Position ID</label>
                            <!-- <input type="number" name="position_id" require="" class="form-control"> -->
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
                        <div class="form-group mb-4">
                            <label for="">Price</label>
                            <input type="number" name="price" require="" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Rating ID</label>
                            <input type="number" name="rating_id" require="" class="form-control">
                        </div>
                        <button class="btn btn-dark" type="submit" name="submit" value="simpan">Simpan Data</button>
                    </form>
                    <?php

                    include('../koneksi.php');

                    if (isset($_POST['submit'])) {
                        $nama = $_POST['nam_player'];
                        $club = $_POST['club_id'];
                        $country = $_POST['country'];
                        $age = $_POST['age'];
                        $position = $_POST['position_id'];
                        $price = $_POST['price'];
                        $rating = $_POST['rating_id'];

                        $datas = mysqli_query($koneksi, "insert into player (nam_player,club_id,country,age,position_id,price,rating_id)
                    values('$nama', '$club', '$country', '$age', '$position', '$price', '$rating')")
                            or die(mysqli_error($koneksi));

                        echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
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
            <!-- <div class="card col-1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Code ID Position</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Keterangan</h6>
                    <p class="card-text">1. Forward</p>
                    <p class="card-text">2. Midfielder</p>
                    <p class="card-text">3. Defender</p>
                    <p class="card-text">4. Goalkeeper</p>
                </div>
            </div> -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script>
        document.getElementById('rating').addEventListener('change', function() {
            var selectedValue = this.value;
            var options = this.getElementsByTagName('option');

            for (var i = 58; i < options.length; i++) {
                if (options[i].value === selectedValue) {
                    options[i].style.display = 'none';
                }
            }
        });
    </script> -->
</body>

</body>

</html>