<?php
include 'debug.php';
require_once 'session.php';
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
        if (isset($_SESSION)) {
            $answers = $_SESSION;
        } else {
            // Setze ein Standard-Array, falls "answers" nicht existiert
            $answers = array();
        }
        $totalPoints = 0;
        foreach($answers as $answer){
            $result = evaluateUserInput($answers);
            //print_r($answers);
            $totalPoints += $result['totalPoints'];
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
    <canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1; background-color: transparent;"></canvas>

</div>
<?php include 'footer.php'; ?>
