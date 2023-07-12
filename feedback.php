<?php
session_start();

// Überprüfung, ob die erforderlichen Session-Variablen gesetzt sind
if (!isset($_SESSION['physical_health'], $_SESSION['supplements'], $_SESSION['physical_activity'], $_SESSION['activity_type'], $_SESSION['activity_importance'], $_SESSION['carbohydrates_meals'], $_SESSION['protein_meals'], $_SESSION['vegetable_meals'], $_SESSION['fruit_meals'], $_SESSION['microwave_meals'])) {
  // Weiterleitung zur Startseite, wenn nicht alle Fragen beantwortet wurden
  header('Location: index.php');
  exit;
}

// Berechnung der Gesamtauswertung
$physicalHealth = $_SESSION['physical_health'];
$supplements = $_SESSION['supplements'];
$physicalActivity = $_SESSION['physical_activity'];
$activityType = $_SESSION['activity_type'];
$activityImportance = $_SESSION['activity_importance'];
$carbohydratesMeals = $_SESSION['carbohydrates_meals'];
$proteinMeals = $_SESSION['protein_meals'];
$vegetableMeals = $_SESSION['vegetable_meals'];
$fruitMeals = $_SESSION['fruit_meals'];
$microwaveMeals = $_SESSION['microwave_meals'];

$thresholdPhysicalActivity = 3; // Schwellenwert für mittlere Wichtigkeit der körperlichen Aktivität
$thresholdNutrition = 2; // Schwellenwert für ausgeglichene Ernährung

$overallScore = 0;

// Bewertung der körperlichen Gesundheit
if ($physicalHealth >= 3) {
  $overallScore++;
}

// Bewertung der Nahrungsergänzungsmittel
if ($supplements === 'yes') {
  $overallScore++;
}

// Bewertung der körperlichen Aktivität
if ($physicalActivity >= $thresholdPhysicalActivity && $activityType !== 'none') {
  $overallScore++;
}

// Bewertung der Ernährung
if ($carbohydratesMeals >= $thresholdNutrition && $proteinMeals >= $thresholdNutrition && $vegetableMeals >= $thresholdNutrition && $fruitMeals >= $thresholdNutrition) {
  $overallScore++;
}

// Klassifizierung basierend auf der Gesamtauswertung
if ($overallScore >= 4) {
  $classification = 'Toll! Du lebst gesund und ohne Spass...wie langweilig!';
} else {
  $classification = 'Hmmm...wahrscheinlich lebst du nicht mehr allzulange aber Hey...du hattest sicher ordentlich Spass!';
}

// Zurücksetzen der Session-Variablen
unset($_SESSION['physical_health'], $_SESSION['supplements'], $_SESSION['physical_activity'], $_SESSION['activity_type'], $_SESSION['activity_importance'], $_SESSION['carbohydrates_meals'], $_SESSION['protein_meals'], $_SESSION['vegetable_meals'], $_SESSION['fruit_meals'], $_SESSION['microwave_meals']);
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <h1>Feedback</h1>
    <p><?php echo $classification; ?></p>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
