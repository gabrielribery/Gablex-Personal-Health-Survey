<?php
session_start();

// Redirect to the next question or the feedback page
if (!isset($_SESSION['question5'])) {
  header('Location: question5.php');
  exit;
}

if (isset($_SESSION['question10'])) {
  header('Location: feedback.php');
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Store the answer in the session
  $_SESSION['question6'] = $_POST['question6'];
  
  // Redirect to the next question
  header('Location: question7.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question 6</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Question 6</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="question6">An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?</label>
          <input type="number" class="form-control" id="question6" name="question6">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
</body>

</html>
