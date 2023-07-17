<?php
session_start();

// Retrieve the stored data from session variables
$question1Value = $_SESSION['question1'];
$question2Value = $_SESSION['question2'];
$question3Value = $_SESSION['question3'];
$question4Value = $_SESSION['question4'];
$question5Value = $_SESSION['question5'];
$question6Value = $_SESSION['question6'];
$question7Value = $_SESSION['question7'];
$question8Value = $_SESSION['question8'];
$question9Value = $_SESSION['question9'];
$question10Value = $_SESSION['question10'];

// Define the feedback based on the evaluated results
$question1Feedback = ($question1Value >= 3) ? 'Healthy' : 'Unhealthy';
$question2Feedback = ($question2Value == 'Yes') ? 'Nahrungsergänzungsmittel: Yes' : 'Nahrungsergänzungsmittel: No';
$question3Feedback = ($question3Value >= 3) ? 'Physical activity: Important' : 'Physical activity: Not important';
$question4Feedback = '';
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
$question5Feedback = ($question5Value >= 3) ? 'Additional physical activity level: Excessive' : 'Additional physical activity level: Insufficient';
$question6Feedback = 'Carbohydrates count: ' . $question6Value;
$question7Feedback = 'Protein count: ' . $question7Value;
$question8Feedback = 'Vegetable count: ' . $question8Value;
$question9Feedback = 'Fruit count: ' . $question9Value;
$question10Feedback = 'Microwave or pre-prepared meal count: ' . $question10Value;

// Clear the session variables (optional)
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Feedback</h1>
      <p>Thank you for completing the survey. Here is your feedback:</p>
      <p>Question 1: <?php echo $question1Feedback; ?></p>
      <p>Question 2: <?php echo $question2Feedback; ?></p>
      <p>Question 3: <?php echo $question3Feedback; ?></p>
      <p>Question 4: <?php echo $question4Feedback; ?></p>
      <p>Question 5: <?php echo $question5Feedback; ?></p>
      <p>Question 6: <?php echo $question6Feedback; ?></p>
      <p>Question 7: <?php echo $question7Feedback; ?></p>
      <p>Question 8: <?php echo $question8Feedback; ?></p>
      <p>Question 9: <?php echo $question9Feedback; ?></p>
      <p>Question 10: <?php echo $question10Feedback; ?></p>
      <!-- Display the remaining questions and their corresponding feedback -->

      <!-- Add any additional content or formatting as needed -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
