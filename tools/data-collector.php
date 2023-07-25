<?php
require_once 'session.php';
if (str_contains($_SERVER['SCRIPT_NAME'], "index.php")) {
    // session_destroy();
}

include_once 'tools.php';
include 'debug.php';

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
