<?php
include 'tools/debug.php';
require_once 'session.php';
include "tools/data-collector.php";
include "tools/evaluate-user-input.php";
include "header_footer/header.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<div class="row justify-content-center">    <div class="col-sm-8">
        <h7>Feedback</h7>
        <h3>Danke für's Mitmachen!</h3>

        <?php
       
        if (isset($_SESSION)) {
            $answers = $_SESSION;
        } else {
            $answers = array();
        }
        $totalPoints = 0;
        foreach($answers as $answer){
            $result = evaluateUserInput($answers);
            //print_r($answers);
            $totalPoints += $result['totalPoints'];
        }

        echo "<p></p>";
        echo "<p class='final-feedback'>" . "Du hast $totalPoints vom Durchschnitt erreicht." . "</p>";

        if ($totalPoints < 20) {
            echo "<p class='final-feedback'>" . "Bitte kümmere dich mehr um deine Gesundheit!" . "</p>";
            echo '<img src="media/1.png" alt="Feedback 1">';
        } elseif ($totalPoints < 30) {
            echo "<p class='final-feedback'>" . "Du scheinst ok zu sein, könntest aber noch mehr für deine Gesundheit tun." . "</p>";
            echo '<img src="media/2.png" alt="Feedback 2">';
        } else {
            echo "<p class='final-feedback'>" . "Gratuliere du bist sehr fit!" . "</p>";
            echo '<img src="media/3.png" alt="Feedback 3">';
        }

        echo "<p></p>";
        ?>
        <button type="button" class="btn btn-primary" onclick="document.location='/index.php'">Repeat</button>
        <p class="spacer"></p>
    </div>
    <canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1; background-color: transparent;"></canvas>

</div>
</div>
<?php include 'header_footer/footer.php'; ?>
