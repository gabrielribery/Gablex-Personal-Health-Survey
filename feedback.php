<?php
session_start();

if (!isset($_SESSION['physical_health'], $_SESSION['supplements'], $_SESSION['physical_activity'], $_SESSION['activity_type'], $_SESSION['activity_importance'], $_SESSION['carbohydrates_meals'], $_SESSION['protein_meals'], $_SESSION['vegetable_meals'], $_SESSION['fruit_meals'], $_SESSION['microwave_meals'])) {
  header('Location: index.php'); // Weiterleitung zur Startseite, wenn nicht alle Fragen beantwortet wurden
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

$thresholdPhysicalActivity = 3; // Schwellenwert für mittlere Wichtigkeit der körperlichen Aktivität wie in simplonline verlangt
$thresholdNutrition = 2; // Schwellenwert für ausgeglichene Ernährung wie in simplonline verlangt

$overallScore = 0;

// Bewertung der körperlichen Gesundheit
if ($physicalHealth >= 3) {
  $overallScore++;
}

// Bewertung der Nahrungsergänzungsmittel
if ($supplements === 'yes') {
  $overallScore++;
}

/// Bewertung der körperlichen Aktivität zusammen genommen da gem Aufgabenstellung sobald eins unterdem Schwellenwert ist oder keine zusätzliche Aktivität ausgweählt ist, ist man ungesund.
if ($physicalActivity >= $thresholdPhysicalActivity && $activityType !== 'none') {
  $overallScore++;
}

// Bewertung der Ernährung Kohlenhydrate, Protein, Gemüse, Früchte zusammen genommen da gem Aufgabenstellung sobald eins unterdem Schwellen wert ist oder nichts eingetragen wurde man ungesund ist.
if ($carbohydratesMeals >= 2 && $proteinMeals >= 2 && $vegetableMeals >= 1 && $fruitMeals >= 1) {
  $overallScore++;
}

// Klassifizierung basierend auf der Gesamtauswertung
if ($overallScore >= 4) {
  $classification = 'Toll! Du lebst gesund und ohne Spass...wie langweilig!';
  $gif = 'images/spass.gif';
  $sound = 'sounds/spass.mp3';
} else {
  $classification = 'Hmmm...wahrscheinlich lebst du nicht mehr allzulange aber Hey...du hattest sicher ordentlich Spass!';
  $gif = 'images/spass.gif';
  $sound = 'sounds/spass.mp3';
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
  <div class="container">
  <h1>Feedback</h1>
  <p><?php echo $classification; ?></p>
  <?php if ($overallScore >= 4): ?>
    <video src="<?php echo $video; ?>" controls></video>
  <?php else: ?>
    <img src="<?php echo $gif; ?>" alt="GIF" />
  <?php endif; ?>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
