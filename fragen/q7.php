<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['protein-meals'] = $_POST['protein-meals'];
  header('Location: q8.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage - Frage 7</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1>Frage 7</h1>
    <form action="q8.php" method="post">
      <div class="mb-3">
        <label for="protein-meals">An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Protein?</label>
        <input type="number" class="form-control" id="protein-meals" name="protein-meals">
      </div>
      <button type="submit" class="btn btn-primary">Weiter</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
