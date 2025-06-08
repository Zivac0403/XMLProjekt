<?php
$xml = simplexml_load_file("kartice.xml");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Popis grafičkih kartica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        .ispod-tablice {
        display: block;
        margin: 20px auto 0;
        max-width: 100%;
        height: auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #99231d;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Grafičke kartice
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Početna</a></li>
        <li class="nav-item"><a class="nav-link active" href="kartice.php">Kartice</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container mt-4">
    <h2>Popis grafičkih kartica</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Model</th>
                    <th>Proizvođač</th>
                    <th>VRAM</th>
                    <th>Cijena</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($xml->kartica as $k) {
                    $model = $k->model;
                    $proizvodjac = $k->proizvodjac;
                    $vram = $k->vram;
                    $cijena = $k->cijena;

                    echo "<tr>";
                    echo "<td>$model</td>";
                    echo "<td>$proizvodjac</td>";
                    echo "<td>$vram</td>";
                    echo "<td>$cijena €</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <img src="img/slika.jpg" alt="GRAFE" class="ispod-tablice">
</main>

<footer class="text-white text-center py-3" style="background-color: #99231d;">
    &copy; 2025 Stranica o grafičkim karticama
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
