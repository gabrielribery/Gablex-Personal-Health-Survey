<?php
function evaluateUserInput($answers)
{
    $totalPoints = 0;

    // Frage 1: Wert gleich oder größer als 3 gibt 1 Punkt
    if (isset($answers["question-0"]) && is_numeric($answers["question-0"]) && intval($answers["question-0"]) >= 3) {
        $totalPoints += 1;
    }

    // Frage 2: Es wird überprüft, ob die Antwort "Ja" ist, und es wird 1 Punkt hinzugefügt
    if (isset($answers["question-1"]) && $answers["question-1"] === "Ja") {
        $totalPoints += 1;
    }

    // Frage 3: Wert gleich oder größer als 3 gibt 1 Punkt
    if (isset($answers["question-2"]) && is_numeric($answers["question-2"]) && intval($answers["question-2"]) >= 3) {
        $totalPoints += 1;
    }

    // Frage 4: Es wird gezählt, wie viele Aktivitäten ausgewählt wurden, und diese Anzahl wird hinzugefügt
    if (isset($answers["question-3"]) && is_array($answers["question-3"])) {
        $totalPoints += count($answers["question-3"]);
    }

    // Frage 5: Wert gleich oder größer als 3 gibt 1 Punkt
    if (isset($answers["question-4"]) && is_numeric($answers["question-4"]) && intval($answers["question-4"]) >= 3) {
        $totalPoints += 1;
    }

    // Frage 6: Wert gleich oder größer als 3 gibt 1 Punkt
    if (isset($answers["question-5"]) && is_numeric($answers["question-5"]) && intval($answers["question-5"]) >= 3) {
        $totalPoints += 1;
    }

    // Frage 7: Es wird überprüft, ob der Wert numerisch ist, und sein ganzzahliger Wert wird hinzugefügt
    if (isset($answers["question-6"]) && is_numeric($answers["question-6"])) {
        $totalPoints += intval($answers["question-6"]);
    }

    // Frage 8: Wert gleich oder größer als 3 gibt 1 Punkt
    if (isset($answers["question-7"]) && is_numeric($answers["question-7"]) && intval($answers["question-7"]) >= 3) {
        $totalPoints += 1;
    }

    // Frage 9: Wert gleich oder größer als 3 gibt 1 Punkt
    if (isset($answers["question-8"]) && is_numeric($answers["question-8"]) && intval($answers["question-8"]) >= 3) {
        $totalPoints += 1;
    }

    // Frage 10: Wert gleich oder größer als 1 gibt -1 Punkt
    if (isset($answers["question-9"]) && is_numeric($answers["question-9"]) && intval($answers["question-9"]) >= 1) {
        $totalPoints -= 1;
    }
    
    // Gesamtauswertung: Überprüfung der Schwellenwerte für "gesund" und "ungesund"
    $isHealthy = false;

    // Hier können Sie die Schwellenwerte für "gesund" anpassen
    $minPointsForHealthy = 3;

    if ($totalPoints >= $minPointsForHealthy) {
        $isHealthy = true;
    }

    // Rückgabe der Gesamtauswertung
    return array("totalPoints" => $totalPoints, "isHealthy" => $isHealthy);
    

}

?>
