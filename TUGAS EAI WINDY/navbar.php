<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
   .navbar {
      background: rgba(0, 0, 0, 0.5); /* Transparan dengan sedikit kegelapan */
      backdrop-filter: blur(10px); /* Efek blur untuk transparan yang lebih modern */
      transition: background 0.5s ease; /* Transisi yang halus */
      border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Garis bawah tipis */
    }
    .navbar:hover {
      background: rgba(0, 0, 0, 0.7); /* Warna latar belakang sedikit lebih gelap saat di-hover */
    }
    .navbar-brand {
      color: #ffffff !important; /* Warna teks putih untuk brand */
      font-weight: bold;
      transition: color 0.5s ease; /* Transisi yang halus */
    }
    .navbar-nav .nav-link {
      color: #ffffff !important; /* Warna teks putih untuk link */
      transition: color 0.5s ease; /* Transisi yang halus */
    }
    .navbar-nav .nav-link:hover {
      color: #ffeb3b !important; /* Warna teks kuning saat di-hover */
    }
    .navbar-toggler-icon {
      background-color: #ffffff; /* Warna putih untuk ikon toggler navbar */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="viewPremierleague.php">Premier League</a>
      <a class="nav-item nav-link" href="viewLaliga.php">La Liga</a>
      <a class="nav-item nav-link" href="viewBundesliga.php">Bundesliga</a>
      <a class="nav-item nav-link" href="viewSeriea.php">Serie A</a>
      <a class="nav-item nav-link" href="viewLigue1.php">Ligue 1</a>
    </div>
  </div>
</nav>

</body>
</html>




