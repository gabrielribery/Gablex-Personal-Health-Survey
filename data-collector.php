<?php
// Muss session_start() vor dem Gebrauch von $_SESSION ausgeführt werden
// Am besten ganz am Anfang einer Webseite, bevor irgendwelche anderen PHP-Skripte ausgeführt werden.

// session_start(); // Das Session-Starten sollte in den Skripten erfolgen, die die Session verwenden, nicht hier.

if (str_contains($_SERVER['SCRIPT_NAME'], "index.php")) {
    session_destroy();
    // session_start(); // Das Session-Starten sollte in den Skripten erfolgen, die die Session verwenden, nicht hier.
}

// Hilfswerkzeuge laden (prettyPrint)
include_once './tools.php';

if (isset($_POST["questionIndex"])) {
    // Baue den Schlüssel für die letzte Frage.
    $lastQuestionID = "question-" . $_POST["questionIndex"];

    // Speichere alle Daten des letzten Posts mit dem Namen $lastQuestionID in der Session.
    $_SESSION[$lastQuestionID] = $_POST;

    // Speichere alle Daten des letzten Posts zusätzlich unter dem allgemeinen Namen "answers" in der Session.
    $_SESSION["answers"] = $_POST;
}

// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
// prettyPrint($_SERVER['SCRIPT_NAME']);
// prettyPrint($_SESSION);

?>
