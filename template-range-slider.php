<?php
include_once './tools.php';
    $data = nextQuestionData();
?>
<div class="container">
    <h1>Slider</h1>
    <div class="question">
    <h4>Welcome to the quiz.</h4>
<ul>
    <li>Crying is allowed but cry quietly.</li>
    <li>Make sure that no tears fall on the keyboard while crying.</li>
    <li>If you have any questions, keep them to yourself.</li>
</ul>
        <br><br>
        <?php
    $questionPrint = $data["questionIndex"] + 1;
    echo "<h5>Question $questionPrint</h5>";
?>
<br>
<h3><?php echo $data["question-text"]; ?></h3>
<form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateRange('range-slider');">
    <p class="instruction"><?php echo $data["instruction"]; ?></p>
    <div class="slidecontainer">
        <?php echo $data["labels"][0]; ?>
        <input type="range" name="range-slider" id="range-slider" class="slider"
                min="<?php echo $data["min"]; ?>"
                max="<?php echo $data["max"]; ?>"
                step="<?php echo $data["step"]; ?>"
                value="<?php echo $data["value"]; ?>">
        <?php echo $data["labels"][4]; ?>
    </div>
    <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
    <p id="validation-warning" class="warning"></p>
    <button type="submit" class="btn btn-primary next">Next</button>
    <p class="spacer"></p>
</form>
    </div>
</div>


