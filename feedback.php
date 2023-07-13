<?php
session_start();

if (!isset($_SESSION['physical_health'], $_SESSION['supplements'], $_SESSION['physical_activity'], $_SESSION['activity_type'], $_SESSION['activity_importance'], $_SESSION['carbohydrates_meals'], $_SESSION['protein_meals'], $_SESSION['vegetable_meals'], $_SESSION['fruit_meals'], $_SESSION['microwave_meals'])) {
  header('Location: index.php'); // Weiterleitung zur Startseite, wenn nicht alle Fragen beantwortet wurden
  exit;
}

// Einzelbewertungen
$physicalHealthScore = 0;
$supplementsScore = 0;
$physicalActivityScore = 0;
$carbohydratesMealsScore = 0;
$proteinMealsScore = 0;
$vegetableMealsScore = 0;
$fruitMealsScore = 0;
$microwaveMealsScore = 0;

// Bewertung der körperlichen Gesundheit (q1)
$physicalHealth = $_SESSION['physical_health'];
if ($physicalHealth >= 3) {
  $physicalHealthScore = 1;
}

// Bewertung der Nahrungsergänzungsmittel (q2)
$supplements = $_SESSION['supplements'];
if ($supplements === 'yes') {
  $supplementsScore = 1;
}

// Bewertung der körperlichen Aktivität (q3)
$physicalActivity = $_SESSION['physical_activity'];
if ($physicalActivity >= 3) {
  $physicalActivityScore = 1;
}

// Bewertung des Aktivitätstyps (q4)
$activityType = $_SESSION['activity_type'];
if ($activityType !== 'none') {
  $physicalActivityScore = 1;
}

// Bewertung der Aktivitätswichtigkeit (q5)
$activityImportance = $_SESSION['activity_importance'];
if ($activityImportance >= 3) {
  $physicalActivityScore = 1;
}

// Bewertung der Ernährung (Kohlenhydrate) (q6)
$carbohydratesMeals = $_SESSION['carbohydrates_meals'];
if ($carbohydratesMeals >= 2) {
  $carbohydratesMealsScore = 1;
}

// Bewertung der Ernährung (Protein) (q7)
$proteinMeals = $_SESSION['protein_meals'];
if ($proteinMeals >= 2) {
  $proteinMealsScore = 1;
}

// Bewertung der Ernährung (Gemüse) (q8)
$vegetableMeals = $_SESSION['vegetable_meals'];
if ($vegetableMeals >= 1) {
  $vegetableMealsScore = 1;
}

// Bewertung der Ernährung (Früchte) (q9)
$fruitMeals = $_SESSION['fruit_meals'];
if ($fruitMeals >= 1) {
  $fruitMealsScore = 1;
}

// Bewertung der Ernährung (Mikrowellen-Gerichte) (q10)
$microwaveMeals = $_SESSION['microwave_meals'];
if ($microwaveMeals === 'no') {
  $microwaveMealsScore = 1;
}

// Gesamtbewertung
$overallScore = $physicalHealthScore + $supplementsScore + $physicalActivityScore + $carbohydratesMealsScore + $proteinMealsScore + $vegetableMealsScore + $fruitMealsScore + $microwaveMealsScore;

// Klassifizierung basierend auf der Gesamtauswertung
if ($overallScore >= 8) {
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
