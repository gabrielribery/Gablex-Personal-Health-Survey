<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 50px;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php session_start(); ?>

    <?php
    // Define feedback variables
    $question1Feedback = '';
    $question2Feedback = '';
    $question3Feedback = '';
    $question4Feedback = '';
    $question5Feedback = '';
    $question6Feedback = '';
    $question7Feedback = '';
    $question8Feedback = '';
    $question9Feedback = '';
    $question10Feedback = '';

    // Evaluate each question individually
    if (isset($_POST['question1'])) {
      $_SESSION['question1'] = $_POST['question1'];
      // Evaluate question 1
      $question1Value = $_SESSION['question1'];
      if ($question1Value >= 3) {
        $question1Feedback = 'Healthy';
      } else {
        $question1Feedback = 'Unhealthy';
      }
    }

    if (isset($_POST['question2'])) {
      $_SESSION['question2'] = $_POST['question2'];
      // Evaluate question 2
      $question2Value = $_SESSION['question2'];
      if ($question2Value == 'Yes') {
        $question2Feedback = 'Nahrungsergänzungsmittel: Yes';
      } else {
        $question2Feedback = 'Nahrungsergänzungsmittel: No';
      }
    }

    if (isset($_POST['question3'])) {
      $_SESSION['question3'] = $_POST['question3'];
      // Evaluate question 3
      $question3Value = $_SESSION['question3'];
      // Modify the condition based on your desired threshold values
      if ($question3Value >= 3) {
        $question3Feedback = 'Physical activity: Important';
      } else {
        $question3Feedback = 'Physical activity: Not important';
      }
    }

    if (isset($_POST['question4'])) {
      $_SESSION['question4'] = $_POST['question4'];
      // Evaluate question 4
      $question4Value = $_SESSION['question4'];
      if ($question4Value == 'None') {
        $question4Feedback = 'Additional physical activity: None';
      } elseif ($question4Value == 'Weights') {
        $question4Feedback = 'Additional physical activity: Weights lifting';
      } elseif ($question4Value == 'Walk') {
        $question4Feedback = 'Additional physical activity: Walking';
      } elseif ($question4Value == 'Hike') {
        $question4Feedback = 'Additional physical activity: Hiking';
      } elseif ($question4Value == 'Other') {
        $question4Feedback = 'Additional physical activity: Other (' . $_POST['activity_other_input'] . ')';
      }
    }

    if (isset($_POST['question5'])) {
      $_SESSION['question5'] = $_POST['question5'];
      // Evaluate question 5
      $question5Value = $_SESSION['question5'];
      // Modify the condition based on your desired threshold values
      if ($question5Value >= 3) {
        $question5Feedback = 'Additional physical activity level: Excessive';
      } else {
        $question5Feedback = 'Additional physical activity level: Insufficient';
      }
    }

    if (isset($_POST['question6'])) {
      $_SESSION['question6'] = $_POST['question6'];
      // Evaluate question 6
      $question6Feedback = 'Carbohydrates count: ' . $_SESSION['question6'];
    }

    if (isset($_POST['question7'])) {
      $_SESSION['question7'] = $_POST['question7'];
      // Evaluate question 7
      $question7Feedback = 'Protein count: ' . $_SESSION['question7'];
    }

    if (isset($_POST['question8'])) {
      $_SESSION['question8'] = $_POST['question8'];
      // Evaluate question 8
      $question8Feedback = 'Vegetable count: ' . $_SESSION['question8'];
    }

    if (isset($_POST['question9'])) {
      $_SESSION['question9'] = $_POST['question9'];
      // Evaluate question 9
      $question9Feedback = 'Fruit count: ' . $_SESSION['question9'];
    }

    if (isset($_POST['question10'])) {
      $_SESSION['question10'] = $_POST['question10'];
      // Evaluate question 10
      $question10Feedback = 'Microwave or pre-prepared meal count: ' . $_SESSION['question10'];
    }

    // Redirect to the feedback page once all questions have been evaluated
    if (isset($_SESSION['question10'])) {
      header('Location: feedback.php');
      exit;
    }
    ?>

    <!-- Start page -->
    <?php if (!isset($_SESSION['question1'])) : ?>
      <div class="text-center">
        <h1>Welcome to the Survey</h1>
        <p>Introduction to the survey.</p>
        <form action="survey.php" method="POST">
          <div class="form-group">
            <label for="question1">Question 1: How healthy are you physically?</label>
            <input type="range" class="form-range" id="question1" name="question1" min="1" max="5" step="1">
          </div>
          <button type="submit" class="btn btn-primary">Next</button>
        </form>
      </div>

    <!-- Remaining Questions -->
    <?php else : ?>
      <div class="text-center">
        <!-- Add the remaining questions and their corresponding forms -->

        <!-- Question 2 -->
        <?php if (!isset($_SESSION['question2'])) : ?>
          <h1>Question 2</h1>
          <form action="survey.php" method="POST">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question2" id="question2_yes" value="Yes">
              <label class="form-check-label" for="question2_yes">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="question2" id="question2_no" value="No">
              <label class="form-check-label" for="question2_no">
                No
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 3 -->
        <?php if (!isset($_SESSION['question3'])) : ?>
          <h1>Question 3</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question3">How important is physical activity for you?</label>
              <input type="range" class="form-range" id="question3" name="question3" min="1" max="5" step="1">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 4 -->
        <?php if (!isset($_SESSION['question4'])) : ?>
          <h1>Question 4</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question4">Which additional physical activity do you engage in the most?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="question4" id="activity_none" value="None">
                <label class="form-check-label" for="activity_none">
                  None
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="question4" id="activity_weights" value="Weights">
                <label class="form-check-label" for="activity_weights">
                  Weights lifting
                </label>
              </div>
              <!-- Add more options -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="question4" id="activity_other" value="Other">
                <label class="form-check-label" for="activity_other">
                  Other
                </label>
                <input type="text" class="form-control" id="activity_other_input" name="activity_other_input">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 5 -->
        <?php if (!isset($_SESSION['question5'])) : ?>
          <h1>Question 5</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question5">Do you feel you have too little, enough, or too much additional physical activity?</label>
              <input type="range" class="form-range" id="question5" name="question5" min="1" max="5" step="1">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 6 -->
        <?php if (!isset($_SESSION['question6'])) : ?>
          <h1>Question 6</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question6">On a typical day, how many of your meals or snacks contain carbohydrates?</label>
              <input type="number" class="form-control" id="question6" name="question6">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 7 -->
        <?php if (!isset($_SESSION['question7'])) : ?>
          <h1>Question 7</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question7">On a typical day, how many of your meals or snacks contain protein?</label>
              <input type="number" class="form-control" id="question7" name="question7">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 8 -->
        <?php if (!isset($_SESSION['question8'])) : ?>
          <h1>Question 8</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question8">On a typical day, how many of your meals or snacks contain vegetables?</label>
              <input type="number" class="form-control" id="question8" name="question8">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 9 -->
        <?php if (!isset($_SESSION['question9'])) : ?>
          <h1>Question 9</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question9">On a typical day, how many of your meals or snacks contain fruits?</label>
              <input type="number" class="form-control" id="question9" name="question9">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>

        <!-- Question 10 -->
        <?php if (!isset($_SESSION['question10'])) : ?>
          <h1>Question 10</h1>
          <form action="survey.php" method="POST">
            <div class="form-group">
              <label for="question10">On a typical day, how many of your meals come from the microwave or are already prepared?</label>
              <input type="number" class="form-control" id="question10" name="question10">
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
          </form>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/js/bootstrap.bundle.min.js"></script>
  <script>
    // Add any necessary JavaScript validations here
  </script>
</body>

</html>
