<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Überprüfen, ob die Frageindizes vorhanden sind und eine Antwort übermittelt wurde
    if (isset($_POST['questionIndex']) && isset($_POST['response'])) {
        $questionIndex = $_POST['questionIndex'];
        $response = $_POST['response'];

        // Überprüfen, ob die 'survey_data'-Session-Variablen bereits existiert
        if (!isset($_SESSION['survey_data'])) {
            $_SESSION['survey_data'] = array();
        }

        // Frageindex und Antwort zur 'survey_data'-Session hinzufügen
        $_SESSION['survey_data'][$questionIndex] = array(
            'question-text' => QUESTIONS[$questionIndex]['question-text'],
            'response' => $response,
        );

        // Weiterleiten zur nächsten Frage oder zur Feedback-Seite, je nachdem ob es weitere Fragen gibt
        if ($questionIndex + 1 < count(QUESTIONS)) {
            header("Location: ./question.php");
            exit();
        } else {
            header("Location: ./feedback.php");
            exit();
        }
    }
}
?>
