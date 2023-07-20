<?php
session_start();
include "data-collector.php";
include "evaluate-user-input.php";
include "header.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<div class="row">
    <div class="col-sm-8">
        <h7>Feedback</h7>
        <h3>Danke für's Mitmachen!</h3>

        <?php
       
        // Überprüfe, ob das Array mit dem Schlüssel "answers" in der Session existiert
        if (isset($_SESSION["answers"])) {
            $answers = $_SESSION["answers"];
        } else {
            // Setze ein Standard-Array, falls "answers" nicht existiert
            $answers = array();
        }

        $result = evaluateUserInput($answers);
        $totalPoints = $result["totalPoints"];
        // Array mit den möglichen Punkten für jede Frage
        $possiblePoints = array(3, 1, 3, 9, 3, 3, 10, 3, 3, 3);

echo "<pre>";
print_r($answers);
echo "</pre>";

if (isset($_SESSION["answers"])) {
    $answers = $_SESSION["answers"];

    echo "<p><strong>Erreichte Punkte pro Frage:</strong></p>";
    for ($i = 1; $i <= count($possiblePoints); $i++) {
        $questionKey = "question-" . $i;

        if (isset($answers[$questionKey])) {
            $pointsForQuestion = evaluateUserInput([$questionKey => $answers[$questionKey]]);
            $achievedPoints = $pointsForQuestion["totalPoints"];
        } else {
            $achievedPoints = 0;
        }

        echo "<p>Frage $i: $achievedPoints von " . $possiblePoints[$i - 1] . "</p>";
    }
}

        echo "<p></p>";
        echo "<p class='final-feedback'>" . "Du hast $totalPoints von 33 Punkten erreicht." . "</p>";

        if ($totalPoints < 12) {
            echo "<p class='final-feedback'>" . "Bitte kümmere dich mehr um deine Gesundheit!" . "</p>";
        } elseif ($totalPoints < 24) {
            echo "<p class='final-feedback'>" . "Du scheinst ok zu sein, könntest aber noch mehr für deine Gesundheit tun." . "</p>";
        } else {
            echo "<p class='final-feedback'>" . "Gratuliere, du bist sehr fit!" . "</p>";
        }

        echo "<p></p>";
        ?>
        <button type="button" class="btn btn-primary" onclick="document.location='/index.php'">Repeat</button>
        <p class="spacer"></p>
    </div>
</div>
<?php include 'footer.php'; ?>
