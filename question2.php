<?php
session_start();

// Redirect to the next question or the feedback page
if (!isset($_SESSION['question1'])) {
  header('Location: index.php');
  exit;
}

if (isset($_SESSION['question10'])) {
  header('Location: feedback.php');
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Store the answer in the session
  $_SESSION['question2'] = $_POST['question2'];
  
  // Redirect to the next question
  header('Location: question3.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question 2</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Question 2</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="question2">Nimmst du Nahrungsergänzungsmittel?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="supplement_yes" value="Ja">
            <label class="form-check-label" for="supplement_yes">
              Ja
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="supplement_no" value="Nein">
            <label class="form-check-label" for="supplement_no">
              Nein
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
</body>

</html>
