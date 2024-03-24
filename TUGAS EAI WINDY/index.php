<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php';
?>

<div class="container">
    <div class="bg-beige mt-4">
        <table class="table table-bordered">
            <thead style="background-color: #eae7dc">
                <tr class="text-center">
                    <th scope="col">Position</th>
                    <th scope="col">Club</th>
                    <th scope="col">Play</th>
                    <th scope="col">Win</th>
                    <th scope="col">Draw</th>
                    <th scope="col">Lose</th>
                    <th scope="col">Point</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS */
    body {
      background-color: #f8f9fa; /* Warna latar belakang */
    }
    .container {
      margin-top: 50px; /* Jarak atas dari container */
    }
    .table {
      background-color: #fff; /* Warna latar belakang tabel */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Bayangan tabel */
    }
    .table thead {
      background-color: #F8F7F3; /* Warna latar belakang header tabel */
    }
    .table th, .table td {
      border-color: #dee2e6; /* Warna garis tepi */
    }
    .bg-beige {
      background-color: #87ceeb; /* Warna latar belakang konten */
      padding: 20px; /* Padding konten */
      border-radius: 10px; /* Sudut melengkung */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Bayangan konten */
      transition: box-shadow 0.3s ease; /* Transisi bayangan */
    }
    .bg-beige:hover {
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); /* Bayangan lebih kuat saat di-hover */
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <div class="bg-beige mt-4">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">Position</th>
                    <th scope="col">Club</th>
                    <th scope="col">Play</th>
                    <th scope="col">Win</th>
                    <th scope="col">Draw</th>
                    <th scope="col">Lose</th>
                    <th scope="col">Point</th>
                </tr>
            </thead>
            <!-- Isi tabel di sini -->
        </table>
    </div>
</div>

</body>
</html>

