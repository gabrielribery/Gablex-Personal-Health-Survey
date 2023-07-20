<?php
function evaluateUserInput($answers)
{
    $totalPoints = 0;

    if (isset($answers["question-1"]) && is_numeric($answers["question-1"])) {
        $totalPoints += intval($answers["question-1"]);
    }

    if (isset($answers["question-2"]) && ($answers["question-2"] === "Yes")) {
        $totalPoints += 1; // Ein Punkt für eine positive Antwort
    }

    if (isset($answers["question-3"]) && is_numeric($answers["question-3"])) {
        $totalPoints += intval($answers["question-3"]);
    }

    if (isset($answers["question-4"])) {
        // Jede ausgewählte Aktivität ergibt einen Punkt
        $totalPoints += count($answers["question-4"]);
    }

    if (isset($answers["question-5"]) && is_numeric($answers["question-5"])) {
        $totalPoints += intval($answers["question-5"]);
    }

if (isset($answers["question-6"]) && is_numeric($answers["question-6"])) {
    $totalPoints += intval($answers["question-6"]);
}

if (isset($answers["question-7"]) && is_numeric($answers["question-7"])) {
    $totalPoints += intval($answers["question-7"]);
}

if (isset($answers["question-8"]) && is_numeric($answers["question-8"])) {
    $totalPoints += intval($answers["question-8"]);
}

if (isset($answers["question-9"]) && is_numeric($answers["question-9"])) {
    $totalPoints += intval($answers["question-9"]);
}

if (isset($answers["question-10"]) && is_numeric($answers["question-10"])) {
    $totalPoints += intval($answers["question-10"]);
}
    
    // Gesamtauswertung: Überprüfung der Schwellenwerte für "gesund" und "ungesund"
    $isHealthy = false;

    $minPhysicalActivityPoints = 3;
    $minAdditionalActivities = 1; 
    $minCarbohydrates = 2;
    $minProtein = 2;
    $minVegetables = 1;
    $minFruits = 1;

    if (
        $totalPoints >= $minPhysicalActivityPoints &&
        isset($answers["question-4"]) && count($answers["question-4"]) >= $minAdditionalActivities &&
        isset($answers["question-6"]) && is_numeric($answers["question-6"]) && intval($answers["question-6"]) >= $minCarbohydrates &&
        isset($answers["question-7"]) && is_numeric($answers["question-7"]) && intval($answers["question-7"]) >= $minProtein &&
        isset($answers["question-8"]) && is_numeric($answers["question-8"]) && intval($answers["question-8"]) >= $minVegetables &&
        isset($answers["question-9"]) && is_numeric($answers["question-9"]) && intval($answers["question-9"]) >= $minFruits
    ) {
        $isHealthy = true;
    }

    // Rückgabe der Gesamtauswertung
    return $isHealthy;
}
?>
