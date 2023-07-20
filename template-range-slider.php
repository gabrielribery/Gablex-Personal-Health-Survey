<?php
include_once './tools.php';
    $data = nextQuestionData();
?>
<div class="container">
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
<script>
    // Get the slider and submit button elements
    const slider = document.getElementById("range-slider");
    const submitButton = document.querySelector(".btn");

    // Function to validate the slider position
    function validateRange(sliderId) {
        const sliderValue = parseFloat(document.getElementById(sliderId).value);
        return sliderValue !== 0; // Return true if the slider value is not 0
    }

    // Function to handle the mouseover event on the submit button
    submitButton.addEventListener("mouseover", function () {
        if (!validateRange("range-slider")) {
            // Change the button's position randomly if the slider value is 0
            submitButton.style.position = "absolute";
            submitButton.style.left = Math.random() * (window.innerWidth - submitButton.offsetWidth) + "px";
            submitButton.style.top = Math.random() * (window.innerHeight - submitButton.offsetHeight) + "px";
        } else {
            // Set the button's position to static if the slider value is not 0
            submitButton.style.position = "static";
        }
    });
</script>



