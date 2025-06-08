<?php
$xml = simplexml_load_file("proizvodjaci.xml");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Grafičke kartice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stil.css">
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
        <li class="nav-item"><a class="nav-link active" href="index.php">Početna</a></li>
        <li class="nav-item"><a class="nav-link" href="kartice.php">Kartice</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container mt-4">
    <h2>Dobrodošli!</h2>
    <p>
        Grafičke kartice su ključne za gaming, dizajn i obradu podataka. Ovdje predstavljamo vodeće proizvođače GPU-a.
    </p>

    <h3 class="mt-4">O proizvođačima</h3>
    <div class="row">
        <?php
        foreach ($xml->proizvodjac as $p) {
            $ime = $p->ime;
            $slika = "img/" . $p->slika;
            $opis = $p->opis;

            echo '<div class="col-md-4 text-center mb-4">';
            echo '<img src="' . $slika . '" alt="' . $ime . '" class="proizvodjac-img rounded mb-2">';
            echo '<h5>' . $ime . '</h5>';
            echo '<p>' . $opis . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</main>

<footer class="text-white text-center py-3" style="background-color: #99231d;">
    &copy; 2025 Stranica o grafičkim karticama
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
