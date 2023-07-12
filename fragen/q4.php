<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['physical-activity-type'])) {
    $_SESSION['physical-activity'] = $_POST['physical-activity'];

    header('Location: q4.php');
    exit;
  } else {
    // $error_message = "Bitte beantworten Sie die Frage zu Supplements.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage - Frage 4</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1>Frage 4</h1>
    <form action="q5.php" method="post">
      <div class="mb-3">
        <label for="physical-activity-type">Welche zusätzliche körperliche Aktivität betreibst du am meisten?</label><br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="activity-type" id="activity-none" value="none">
          <label class="form-check-label" for="activity-none">Keine zusätzliche körperliche Aktivität</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="activity-type" id="activity-weights" value="weights">
          <label class="form-check-label" for="activity-weights">Gewichte heben</label>
        </div>
        <!-- Weitere Aktivitäten hier einfügen -->
        <button type="submit" class="btn btn-primary">Weiter</button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
