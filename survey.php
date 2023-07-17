<?php
session_start();

// Handle form submissions and store data in session variables
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['question1'])) {
    $_SESSION['question1'] = $_POST['question1'];
  }

  if (isset($_POST['question2'])) {
    $_SESSION['question2'] = $_POST['question2'];
  }

  if (isset($_POST['question3'])) {
    $_SESSION['question3'] = $_POST['question3'];
  }

  if (isset($_POST['question4'])) {
    $_SESSION['question4'] = $_POST['question4'];
    if ($_POST['question4'] == 'Other') {
      $_SESSION['activity_other_input'] = $_POST['activity_other_input'];
    }
  }

  if (isset($_POST['question5'])) {
    $_SESSION['question5'] = $_POST['question5'];
  }

  if (isset($_POST['question6'])) {
    $_SESSION['question6'] = $_POST['question6'];
  }

  if (isset($_POST['question7'])) {
    $_SESSION['question7'] = $_POST['question7'];
  }

  if (isset($_POST['question8'])) {
    $_SESSION['question8'] = $_POST['question8'];
  }

  if (isset($_POST['question9'])) {
    $_SESSION['question9'] = $_POST['question9'];
  }

  if (isset($_POST['question10'])) {
    $_SESSION['question10'] = $_POST['question10'];
  }

  // Redirect to the next question or the feedback page
  if (isset($_SESSION['question10'])) {
    header('Location: feedback.php');
    exit;
  } else {
    // Redirect to the next question
    $nextQuestion = getNextQuestion();
    header('Location: ' . $nextQuestion);
    exit;
  }
}

// Implement the function to determine the next question
function getNextQuestion() {
  $questionMapping = array(
    1 => 'question2.php',
    2 => 'question3.php',
    3 => 'question4.php',
    4 => 'question5.php',
    5 => 'question6.php',
    6 => 'question7.php',
    7 => 'question8.php',
    8 => 'question9.php',
    9 => 'question10.php'
  );

  $currentQuestion = count($_SESSION) - 1; // Subtract 1 for the 'question1' key

  if (isset($questionMapping[$currentQuestion])) {
    return $questionMapping[$currentQuestion];
  }

  // Default to the start page if the current question is not found in the mapping
  return 'survey.php';
}
