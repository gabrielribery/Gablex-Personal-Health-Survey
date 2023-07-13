<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['fruit-meals'])) { // Überprüfen, ob die Frage zu "supplements" beantwortet wurde (aktuelle Frage)
    $_SESSION['vegetable-meals'] = $_POST['vegetable-meals'];   // Speichern der vorherigen Benutzerantwort in einer Session-Variablen um das am Ende zusammen zu zählen
    // Weiterleitung zur nächsten Frage
    header('Location: q10.php'); //Die Funktion "header" ist anscheinend ein vorgegebener Funktionsname in PHP der speziell für das Senden von HTTP-Headern verwendet wird
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage - Frage 9</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1>Frage 9</h1>
    <form action="q9.php" method="post">
      <div class="mb-3">
        <label for="fruit-meals">An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Früchte?</label>
        <input type="number" class="form-control" id="fruit-meals" name="fruit-meals">
      </div>
      <button type="submit" class="btn btn-primary">Weiter</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
