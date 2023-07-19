<?php

    include './tools.php';

    $data = nextQuestionData();
?>

<div class="container">

    <h1>SliderS</h1>

    <img class="image" src="./images/health.jpg" alt="health.jpg">

    <div class="question">
    <h4>Welcome to the quiz.</h4>
<ul>
    <li>Crying is allowed but cry silently.</li>
    <li>Make sure that no tears fall on the keyboard while crying.</li>
    <li>If you have any questions, keep them to yourself.</li>
</ul>

        <br><br>


        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h5>Question $questionPrint</h5>";
        ?>

        
   
 <!--       <h5>Question <?php echo "$questionIndex + 1"; ?></h5> -->

        <br>
        
        <h3><?php echo $data["question-text"]; ?></h3>
        <form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateRange('range-slider');">
            <p class="instruction"><?php echo $data["instruction"]; ?></p>

            <br>

<!--
            <div class="row flex-nowrap" style="padding-left: 16%">
                <div class="col">
                    <p><?php echo $data["labels"][0]; ?></p>
                </div>
                <div class="col" style="text-align: center;">
                    <p><?php echo $data["labels"][1]; ?></p>
                </div>
                <div class="col" style="text-align: right;">
                    <p><?php echo $data["labels"][2]; ?></p>
                </div>
            </div>
-->

            <div class="slidecontainer">
            <?php echo $data["labels"][0]; ?>
            <input type="range" name="range-slider" id="range-slider" class="slider"
                    min="<?php echo $data["min"]; ?>"
                    max="<?php echo $data["max"]; ?>"
                    step="<?php echo $data["step"]; ?>"
                    value="<?php echo $data["value"]; ?>">
            <?php echo $data["labels"][1]; ?>
            </div>
            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validation-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary next">Next</button>

            <p class="spacer"></p>
        </form>


        

    </div>

</div>


