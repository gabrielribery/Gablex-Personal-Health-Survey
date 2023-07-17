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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="cssinput.css">
  <style>
    .slider-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 20px;
    }

    .slider-values {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      letter-spacing: 110px;
    }

    #sliderImg {
  display: block;
  margin: 0 auto;
  max-width: 30px;
  height: auto;
}




  </style>
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Welcome to the Survey</h1>
      <p>Introduction to the survey.</p>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="question1">How healthy are you physically?</label>
          <div class="slider-container">
            <div class="slider-values">
              <span>0</span>
              <span>1</span>
              <span>2</span>
              <span>3</span>
              <span>4</span>
              <span>5</span>
            </div>
            <input type="range" class="form-range" id="question1" name="question1" min="0" max="5" step="1">
          </div>
        </div>
        <div class="slider-image">
          <img id="sliderImg" src="" alt="Slider Image">
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>

  <script>
    const slider = document.getElementById("question1");
    const sliderImg = document.getElementById("sliderImg");

    slider.addEventListener("input", function() {
      const value = this.value;
      sliderImg.src = `images/sli${value}.png`;
    });
  </script>
</body>

</html>

