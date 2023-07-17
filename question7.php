<?php
session_start();

// Redirect to the next question or the feedback page
if (!isset($_SESSION['question6'])) {
  header('Location: question6.php');
  exit;
}

if (isset($_SESSION['question10'])) {
  header('Location: feedback.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question 7</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Question 7</h1>
      <form action="question8.php" method="POST">
        <div class="form-group">
          <label for="question7">An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Protein?</label>
          <input type="number" class="form-control" id="question7" name="question7">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
</body>

</html>
