<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['microwave-meals'])) { // Überprüfen, ob die Frage zu "supplements" beantwortet wurde (aktuelle Frage)
    $_SESSION['fruit-meals'] = $_POST['fruit-meals'];   // Speichern der vorherigen Benutzerantwort in einer Session-Variablen um das am Ende zusammen zu zählen
    // Weiterleitung zur nächsten Frage
    header('Location: ../feedback.php'); //Die Funktion "header" ist anscheinend ein vorgegebener Funktionsname in PHP der speziell für das Senden von HTTP-Headern verwendet wird
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage - Frage 10</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1>Frage 10</h1>
    <form action="../feedback.php" method="post">
      <div class="mb-3">
        <label for="microwave-meals">An einem typischen Tag: Wie viele deiner Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?</label>
        <input type="number" class="form-control" id="microwave-meals" name="microwave-meals">
      </div>
      <button type="submit" class="btn btn-primary">Weiter</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
