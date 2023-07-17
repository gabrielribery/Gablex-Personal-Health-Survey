<?php
session_start();

// Redirect to the next question or the feedback page
if (!isset($_SESSION['question4'])) {
  header('Location: question4.php');
  exit;
}

if (isset($_SESSION['question10'])) {
  header('Location: feedback.php');
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Store the answer in the session
  $_SESSION['question5'] = $_POST['question5'];
  
  // Redirect to the next question
  header('Location: question6.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question 5</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Question 5</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="question5">Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?</label>
          <input type="range" class="form-range" id="question5" name="question5" min="1" max="5" step="1">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
</body>

</html>
