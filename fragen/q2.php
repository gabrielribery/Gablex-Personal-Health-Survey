<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['supplements'])) { // Überprüfen, ob die Frage zu "supplements" beantwortet wurde (aktuelle Frage)
    $_SESSION['physical_health'] = $_POST['physical-health'];   // Speichern der vorherigen Benutzerantwort in einer Session-Variablen um das am Ende zusammen zu zählen
    // Weiterleitung zur nächsten Frage
    header('Location: q3.php'); //Die Funktion "header" ist anscheinend ein vorgegebener Funktionsname in PHP der speziell für das Senden von HTTP-Headern verwendet wird
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage - Frage 2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1>Frage 2</h1>
    <form action="q3.php" method="post" onsubmit="return validateForm()"> <!-- Weiterleitng der Daten und des Users an form3.php sofern validiert durch js-->
      <div class="mb-3">
        <label for="supplements">Nimmst du Nahrungsergänzungsmittel?</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="supplements" id="supplements-yes" value="yes">
          <label class="form-check-label" for="supplements-yes">Ja</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="supplements" id="supplements-no" value="no">
          <label class="form-check-label" for="supplements-no">Nein</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Weiter</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script>
    function validateForm() {
      var supplementsYes = document.getElementById("supplements-yes");
      var supplementsNo = document.getElementById("supplements-no");

      if (!supplementsYes.checked && !supplementsNo.checked) {
        alert("Bitte wähle eine Antwort aus.");
        return false;
      }

      return true;
    }
  </script>
</body>

</html>
