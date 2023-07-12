<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Überprüfen, ob die Frage zu "supplements" beantwortet wurde
  if (isset($_POST['supplements'])) {
    // Speichern der Benutzerantwort in einer Session-Variablen um das am Ende zusammen zu zählen
    $_SESSION['physical_health'] = $_POST['physical-health'];

    // Weiterleitung zur nächsten Frage
    header('Location: q3.php');
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
    <form action="q3.php" method="post" onsubmit="return validateForm()">
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
        return false; // Blockiert das Absenden des Formulars
      }

      return true; // Erlaubt das Absenden des Formulars
    }
  </script>
</body>

</html>
