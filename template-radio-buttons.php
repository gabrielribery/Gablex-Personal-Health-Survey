<?php
    include_once './tools.php';
    $data = nextQuestionData();
?>
<div class="container">
    <h1>Radio-Button</h1>
    <div class="question">
        <br><br>
        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h7>Question $questionPrint</h7>";
        ?>
        </div>
        <h3><?php echo $data["question-text"]; ?></h3>
        <form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateRadios('single-choice');">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
                <label class="form-check-label" for="single-choice-0">
                    <p><?php echo $data["values"][0]; ?></p>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
                <label class="form-check-label" for="single-choice-1">
                    <p><?php echo $data["values"][1]; ?></p>
                </label>
            </div>
            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validate-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary">Next</button>
            <p class="spacer"></p>
        </form>
    </div>
</div>

