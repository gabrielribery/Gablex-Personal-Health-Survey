<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['physical-activity'])) {
    $_SESSION['supplements'] = $_POST['supplements'];

    header('Location: q4.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage - Frage 3</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1>Frage 3</h1>
    <form action="q4.php" method="post">
      <div class="mb-3">
        <label for="physical-activity">Wie wichtig ist körperliche Aktivität für dich?</label>
        <input type="range" class="form-range" id="physical-activity" name="physical-activity" min="1" max="5">
      </div>
      <button type="submit" class="btn btn-primary">Weiter</button>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
