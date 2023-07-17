<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questionIndex = $_POST['questionIndex']; //dada sammeln
    $answer = "";

    if ($_POST['range-slider']) {
        $answer = $_POST['range-slider'];
    }
    
    if (isset($_POST['radio-option'])) {
        $answer = $_POST['radio-option'];
    }
    
    if (isset($_POST['checkbox-options'])) {
        $answer = implode(", ", $_POST['checkbox-options']);
    }
    
    if (isset($_POST['text-input'])) {
        $answer = $_POST['text-input'];
    }

    $_SESSION["data"][$questionIndex] = $answer;

    // nächste frage oder wenn alle beantwortet zur feedbackseite
    $nextQuestionIndex = $questionIndex + 1;
    if ($nextQuestionIndex < count(QUESTIONS)) {
        header("Location: question-$nextQuestionIndex.php");
        exit();
    } else {
        header("Location: feedback.php");
        exit();
    }
}

?>
