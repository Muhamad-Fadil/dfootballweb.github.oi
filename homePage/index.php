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

</head>

<body>
    <div class="container-side">
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
            <h1 class="m-4">Dashboard</h1>
            <div class="container m-4">
                <div class="row gap-3">
                    <div class="card" style="width: 45rem;">
                        <div class="card-body">
                            <h5 class="card-title">Welcome to D-Football</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">We have a list about soccer</h6>
                            <p class="card-text">1. Football Player</p>
                            <p class="card-text">2. Football Club</p>
                            <p class="card-text">3. Position Player</p>
                            <p class="card-text">4. Rating Player</p>
                            <a href="https://www.transfermarkt.co.id/" class="card-link" target="_blank">Source Link</a>
                            <a href="http://www.idezia.com/" class="card-link" target="_blank">Source Link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Creator's Profile</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Contact me below</h6>
                            <p class="card-text"><i class="bi bi-person-fill"></i> Muhamad Syahrul Fadillah</p>
                            <p class="card-text"><i class="bi bi-instagram"></i> @msfadillah27</p>
                            <p class="card-text"><i class="bi bi-linkedin"></i> Muhamad Syahrul Fadillah</p>
                            <p class="card-text"><i class="bi bi-envelope-fill"></i> syahrulfadillah013@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="card-header bg-dark text-white">
                    <p class="fs-2 text-center">----------------------------------------------------------------------</p>
                </div>
                <h1 class="m-4">List Football Team</h1>
                <div class="row gap-4 justify-content-center ">
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Real-Madrid.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Real Madrid</h5>
                            <p class="card-text">Real Madrid Club de Fútbol, umumnya dikenal sebagai Real Madrid, atau hanya Real, adalah klub sepakbola profesional yang berbasis di Madrid, Spanyol. Didirikan pada 6 Maret 1902 sebagai Madrid Football Club, klub ini secara tradisi mengenakan kostum kandang serba putih sejak awal.</p>
                            <a href="https://www.realmadrid.com/en" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Manchester-United.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Manchester United</h5>
                            <p class="card-text">Manchester United Football Club adalah klub sepak bola profesional yang berbasis di Old Trafford, Greater Manchester, Inggris. Dijuluki "Setan Merah", klub ini didirikan sebagai Klub Newton Heath LYR FC pada tahun 1878, berganti nama menjadi Manchester United pada tahun 1902 dan pindah ke stadion Old Trafford, pada tahun 1910 sampai saat ini.</p>
                            <a href="https://www.manutd.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/FC-Barcelona.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FC Barcelona</h5>
                            <p class="card-text">Futbol Club Barcelona, umumnya dikenal sebagai Barcelona dan akrab dengan sebutan Barça, adalah klub sepakbola profesional yang berbasis di Barcelona, Catalonia, Spanyol. Didirikan pada tahun 1899 oleh sekelompok pemain Swiss, Inggris dan Catalan yang dipimpin oleh Joan Gamper.</p>
                            <a href="https://www.fcbarcelona.com/en/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/bayern.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FC Bayern München</h5>
                            <p class="card-text">Fußball-Club Bayern München e.V., umumnya dikenal sebagai FC Bayern München, FCB, Bayern Munich, atau FC Bayern, adalah klub olahraga Jerman yang berbasis di Munich, Bavaria (Bayern). Ia terkenal karena tim sepak bola profesionalnya, yang bermain di Bundesliga</p>
                            <a href="https://fcbayern.com/en" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Manchester_City.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Manchester City</h5>
                            <p class="card-text">Manchester City Football Club adalah klub sepakbola di Manchester, Inggris. Didirikan pada tahun 1880 sebagai St. Mark's (West Gorton), mereka menjadi Ardrie Association Football Club pada tahun 1887 dan Manchester City pada tahun 1894.</p>
                            <a href="https://id.mancity.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Liverpool.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Liverpool</h5>
                            <p class="card-text">Liverpool Football Club adalah klub sepak bola profesional di Liverpool, Inggris. Didirikan pada tahun 1892, klub bergabung dengan Football League pada tahun berikutnya dan telah bermain di Anfield sejak pembentukannya</p>
                            <a href="https://indonesia.liverpoolfc.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/AC-Milan.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">AC Milan</h5>
                            <p class="card-text">Associazione Calcio Milan, sering disebut A.C. Milan atau hanya Milan, adalah sebuah klub sepak bola Italia yang berbasis di Milan, Lombardy. Mereka bermain dengan kostum bergaris merah-hitam dan celana putih</p>
                            <a href="https://www.acmilan.com/en" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Arsenal.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Arsenal</h5>
                            <p class="card-text">Arsenal Football Club adalah klub sepak bola profesional yang berbasis di Islington, London, Inggris. Arsenal adalah klub pertama dari Selatan Inggris yang bergabung dengan The Football League, pada tahun 1893, dan mereka mencapai Divisi Pertama pada tahun 1904.</p>
                            <a href="https://www.arsenal.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Chelsea.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chelsea</h5>
                            <p class="card-text">Chelsea Football Club adalah klub sepakbola profesional di London, Inggris. Didirikan pada tahun 1905, sejak saat itu stadion kandang mereka berada di Stamford Bridge. Warna kit reguler Chelsea adalah kemeja dan celana pendek biru dengan kaus kaki putih.</p>
                            <a href="https://www.chelseafc.com/en" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Tottenham-Hotspur.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tottenham Hotspur</h5>
                            <p class="card-text">Tottenham Hotspur Football Club, biasanya disebut Tottenham atau Spurs, adalah klub sepak bola Inggris di Tottenham, London. Didirikan pada tahun 1882, Tottenham memenangkan Piala FA untuk pertama kalinya pada tahun 1901.</p>
                            <a href="https://www.tottenhamhotspur.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Paris-Saint-Germain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paris Saint Germain</h5>
                            <p class="card-text">Paris Saint-Germain Football Club, umumnya dikenal dengan Paris Saint-Germain, Paris SG, atau hanya PSG, adalah klub sepakbola profesional Prancis yang berbasis di kota Paris. Didirikan pada tahun 1970, klub ini secara tradisional memakai warna seragam Merah-Biru.</p>
                            <a href="https://id.psg.fr/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Borussia-Dortmund.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Borussia Dortmund</h5>
                            <p class="card-text">Ballspielverein Borussia 09 e.V. Dortmund, umumnya dikenal sebagai Borussia Dortmund, BVB, atau hanya Dortmund, adalah klub olahraga Jerman yang berbasis di Dortmund, North Rhine-Westphalia (Borussia adalah setara Latin Prusia).</p>
                            <a href="https://www.bvb.de/eng" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Al-Nassr_fc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Al Nassr</h5>
                            <p class="card-text">Al-Nassr Saudi Club (bahasa Arab: نادي النصر السعودي; Naṣr yang berarti "Kemenangan") adalah klub sepak bola Arab Saudi yang berbasis di Riyadh. Dibentuk pada tahun 1955, klub memainkan pertandingan kandangnya di King Fahd Stadium dan Prince Faisal bin Fahd Stadium</p>
                            <a href="https://alnassr.sa/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/ALhilal_FC.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Al-Hilal</h5>
                            <p class="card-text">Al Hilal Saudi Football Club, adalah klub multi-olahraga profesional Arab Saudi yang berbasis di Riyadh. Didirikan pada 16 Oktober 1957, klub ini salah satu dari empat klub yang telah berpartisipasi di semua musim Liga Profesional Saudi sejak didirikan pada tahun 1976.</p>
                            <a href="https://alhilal.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Inter_Miami_CF.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Inter Miami CF</h5>
                            <p class="card-text">Club Internacional de Fútbol Miami, yang dikenal dalam bahasa Inggris sebagai Inter Miami CF atau hanya Inter Miami, adalah klub sepak bola profesional Amerika yang berbasis di daerah metropolitan Miami.</p>
                            <a href="https://www.intermiamicf.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Al-Ittihad.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Al-Ittihad</h5>
                            <p class="card-text">Al-Ittihad Club Arab Saudi (bahasa Arab: نادي الاتحاد العربي السعودي), juga hanya dikenal sebagai Al-Ittihad, yang secara harfiah berarti The Union, adalah klub sepak bola Saudi yang berbasis di Jeddah. Al-Ittihad telah memenangkan 8 gelar Liga dan juga memegang 35 kemenangan kejuaraan resmi, tiga di antaranya adalah kejuaraan Asia.</p>
                            <a href="https://ittihadclub.sa/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Atletico_Madrid.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Atlético Madrid</h5>
                            <p class="card-text">Club Atlético de Madrid, SAD, umumnya dikenal sebagai Atlético Madrid, atau hanya sebagai Atlético atau Atleti, adalah klub sepak bola profesional Spanyol yang berbasis di Madrid. Kot kandang Atletico adalah kemeja bergaris vertikal merah dan putih, dengan celana pendek biru, dan kaus kaki biru dan merah. Kombinasi ini telah digunakan sejak 1911.</p>
                            <a href="https://en.atleticodemadrid.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Napoli.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Napoli</h5>
                            <p class="card-text">Società Sportiva Calcio Napoli (umumnya hanya disebut Napoli), adalah sebuah klub sepak bola Italia yang bermarkas di Napoli, Campania. Seragam mereka berwarna biru langit, sehingga mereka dijuluki Azzurri (Biru).</p>
                            <a href="https://sscnapoli.it/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Juventus_FC.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Juventus</h5>
                            <p class="card-text">Juventus Football Club S.p.A., biasa disebut Juventus dan popular dengan nama Juve, adalah klub sepak bola profesional Italia yang berbasis di Turin, Piedmont. Klub ini adalah yang tertua ketiga di Italia dan telah menghabiskan sebagian besar sejarahnya di Serie A, kecuali pada musim 2006–07, mulai dari Divisi Pertama (dikenal sebagai Serie A sejak 1929).</p>
                            <a href="https://www.juventus.com/id/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/FC_Internazionale_Milano.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Internazionale Milano</h5>
                            <p class="card-text">F.C. Internazionale Milano, sering disebut sebagai Internazionale atau hanya Inter, dan sehari-hari dikenal sebagai Inter Milan di luar Italia, adalah sebuah klub sepak bola profesional yang bermarkas di Milan, Italia. Inter Milan mempunyai julukan sebagai il Nerazzurri (si biru hitam).</p>
                            <a href="https://www.inter.it/en" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Roma.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">A.S. Roma</h5>
                            <p class="card-text">Associazione Sportiva Roma, biasa disebut AS Roma, adalah sebuah klub sepak bola Italia yang bermarkas di Roma. Markas mereka saat ini berada di Stadio Olimpico Roma, tempat mereka berbagi dengan rival sekota Lazio. Dengan kapasitas lebih dari 72.000, dan menjadi stadion kedua terbesar di Italia dibawah stadion San Siro di Kota Milan.</p>
                            <a href="https://www.asroma.com/" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8" style="width: 18rem;">
                        <img src="img/Sevilla_cf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sevilla CF</h5>
                            <p class="card-text">Sevilla Fútbol Club, S.A.D., atau hanya Sevilla, adalah klub sepak bola tertua di Spanyol yang berbasis di Seville, ibu kota dan kota terbesar dari komunitas otonom Andalusia.</p>
                            <a href="https://sevillafc.es/en" class="btn btn-primary" target="_blank">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-3 ">
                <div class="card-header bg-dark text-white">
                    <p class="fs-2 text-center">----------------------------------------------------------------------</p>
                </div>
                <h1 class="m-3">Match Results</h1>
                <div class="row col-md-12 gap-2 justify-content-center">
                    <h3 class="m-3 text-center ">---- Rabu, 27 September 2023 ----</h3>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Seria A</div>
                        <div class="card-body">
                            <h5 class="card-title">Juventus vs Lecce</h5>
                            <p class="card-text">1 - 0</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">La Liga</div>
                        <div class="card-body">
                            <h5 class="card-title">Sevilla vs Almeria</h5>
                            <p class="card-text">5 - 1</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Bradford vs Middlesbrough</h5>
                            <p class="card-text">0 - 2</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Exeter City vs Luton Town</h5>
                            <p class="card-text">1 - 0</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Ipswich Town vs Wolves</h5>
                            <p class="card-text">3 - 2</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Mansfield Town vs Peterborough</h5>
                            <p class="card-text">2 - 2</p>
                            <p class="card-text">PEN 3 - 1</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Port Vale vs Sutton United</h5>
                            <p class="card-text">2 - 1</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Salford City vs Burnley</h5>
                            <p class="card-text">0 - 4</p>
                        </div>
                    </div>
                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                        <div class="card-header">Carabao Cup</div>
                        <div class="card-body">
                            <h5 class="card-title">Manchester United vs Crystal Palace</h5>
                            <p class="card-text">3 - 0</p>
                        </div>
                    </div>

                </div>
                <h1 class="m-3">Match Schedule</h1>
                <div class="row col-md-12 gap-2 justify-content-center">
                    <h3 class="m-3 text-center ">---- Rabu, 27 September 2023 ----</h3>
                    <div class="card text-center col-md-5 ">
                        <div class="card-header">
                            Seria A
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cagliari vs AC Milan</h5>
                            <p class="card-text">23.30 WIB beIN Sport</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Eradivise
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">PSV Eindhoven vs Go Ahead Eagles</h5>
                            <p class="card-text">23.35 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <h3 class="m-3 text-center">---- Kamis, 28 September 2023 ----</h3>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            La Liga
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Real Madrid vs Las Palmas</h5>
                            <p class="card-text">00.00 WIB beIN Sports</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Serie A
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Inter Milan vs Sassuolo</h5>
                            <p class="card-text">01.45 WIB beIN Sports</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Carabao Cup
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aston Villa vs Everton</h5>
                            <p class="card-text">01.45 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Carabao Cup
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Chelsea vs Brighton & Hove Albion</h5>
                            <p class="card-text">01.45 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Carabao Cup
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Liverpool vs Liecester City</h5>
                            <p class="card-text">01.45 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Carabao Cup
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Brentford vs Arsenal</h5>
                            <p class="card-text">01.45 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Carabao Cup
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Newcastle United vs Manchester City</h5>
                            <p class="card-text">02.00 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Eradivise
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ajax vs Volendam</h5>
                            <p class="card-text">02.00 WIB Mola TV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            La Liga
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Valencia vs Real Sociedad</h5>
                            <p class="card-text">02.30 WIB beIN Sports</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Asian Games 2022
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Uzbekistan vs Indonesia</h5>
                            <p class="card-text">15.30 RCTI % Vision+</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <h3 class="m-3 text-center">---- Jumat, 29 September 2023 ----</h3>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Seria A
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Genoa vs AS Roma</h5>
                            <p class="card-text">01.45 beIN Sport</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            La Liga
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Osasuna vs Atletico Madrid</h5>
                            <p class="card-text">02.30 beIN Sport</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                    <div class="card text-center col-md-5">
                        <div class="card-header">
                            Saudi Pro League
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Al-Tai vs Al-Nassr</h5>
                            <p class="card-text">22.00 SPOTV</p>
                            <a href="#" class="btn btn-primary">Go to Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>