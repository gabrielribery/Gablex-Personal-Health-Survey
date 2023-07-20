<?php
    include_once './tools.php';
    $data = nextQuestionData();
?>
<div class="container">
    <h1>Number-Input</h1>
    <div class="question">
        <br><br>
        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h7>Question $questionPrint</h7>";
        ?>
        <h3><?php echo $data["question-text"]; ?></h3>
        <form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateNumber();">
                <input type="number" id="number" name="number"><br><br>
                <label for="number">Input number HERE</label>
            <input type="hidden" name="questionIndex" value='<?php echo $data["questionIndex"]; ?>'>
            <p id="validate-warning" class="warning"></p>
            <button type="submit" class="btn btn-primary">Next</button>
            <p class="spacer"></p>
        </form>
    </div>
</div>
<script>
    // Get the input number element and the submit button
    const inputNumber = document.getElementById("number");
    const submitButton = document.querySelector(".btn");

    // Function to validate the input number
    function validateNumber() {
        const inputValue = parseFloat(inputNumber.value);
        return !isNaN(inputValue) && inputValue !== 0; // Return true if the input is a valid non-zero number
    }

    // Function to handle the mouseover event on the submit button
    submitButton.addEventListener("mouseover", function () {
        if (!validateNumber()) {
            // Change the button's position randomly if the input number is not valid
            submitButton.style.position = "absolute";
            submitButton.style.left = Math.random() * (window.innerWidth - submitButton.offsetWidth) + "px";
            submitButton.style.top = Math.random() * (window.innerHeight - submitButton.offsetHeight) + "px";
        } else {
            // Set the button's position to static if the input number is valid
            submitButton.style.position = "static";
        }
    });
</script>
