<?php
session_start();

// Check if all previous questions are answered
if (isset($_SESSION['question10'])) {
  header('Location: feedback.php');
  exit;
} elseif (isset($_SESSION['question9'])) {
  header('Location: question10.php');
  exit;
} elseif (isset($_SESSION['question8'])) {
  header('Location: question9.php');
  exit;
} elseif (isset($_SESSION['question7'])) {
  header('Location: question8.php');
  exit;
} elseif (isset($_SESSION['question6'])) {
  header('Location: question7.php');
  exit;
} elseif (isset($_SESSION['question5'])) {
  header('Location: question6.php');
  exit;
} elseif (isset($_SESSION['question4'])) {
  header('Location: question5.php');
  exit;
} elseif (isset($_SESSION['question3'])) {
  header('Location: question4.php');
  exit;
} elseif (isset($_SESSION['question2'])) {
  header('Location: question3.php');
  exit;
}

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate and process the submitted data

  // Set the session variable for question 2
  $_SESSION['question2'] = $_POST['question1'];

  // Redirect to the next question
  header('Location: question2.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"></head>
  <link rel="stylesheet" href="cssinput.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Welcome to the Survey</h1>
      <p>Introduction to the survey.</p>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="question1">How healthy are you physically?</label>
          <input type="range" class="form-range" id="question1" name="question1" min="1" max="5" step="1">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
</body>

</html>
