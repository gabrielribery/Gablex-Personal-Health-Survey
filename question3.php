<?php
session_start();

// Redirect to the next question or the feedback page
if (!isset($_SESSION['question2'])) {
  header('Location: question2.php');
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
  <title>Question 3</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Question 3</h1>
      <form action="question4.php" method="POST">
        <div class="form-group">
          <label for="question3">How important is physical activity for you?</label>
          <input type="range" class="form-range" id="question3" name="question3" min="1" max="5" step="1">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
</body>

</html>
