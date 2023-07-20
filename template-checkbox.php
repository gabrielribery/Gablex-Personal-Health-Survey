<?php
    include_once './tools.php';
    $data = nextQuestionData();
?>

<div class="container">
    <h1>Checkbox</h1>
    <div class="question">
        <br><br>
        <?php
            $questionPrint = $data["questionIndex"] + 1;
            echo "<h7>Question $questionPrint</h7>";
        ?>       
        <h3><?php echo $data["question-text"]; ?></h3>
        <br>
        <form action="<?php echo $data["action"]; ?>" method="post" onsubmit="return validateCheckboxes();">
            <?php
                $values = $data["values"];
                foreach($values as $i => $value)
                    {
                        $chbox = "chbox-$i";
                        echo "<input type='checkbox' id='$chbox' name='$chbox' value='$value'>&nbsp;";
                        echo "<label for='$chbox'> $value</label><br>";
                    }
            ?>
            <input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
            <p id="validation-warning" class="warning">&nbsp;</p>
            <button type="submit" class="btn btn-primary">Next</button>
            <p class="spacer"></p>
        </form>
    </div>
</div>
<script>
    // Get the checkboxes and the submit button
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const submitButton = document.querySelector(".btn");

    // Function to validate the checkboxes
    function validateCheckboxes() {
        for (const checkbox of checkboxes) {
            if (checkbox.checked) {
                return true; // Return true if at least one checkbox is checked
            }
        }
        return false; // Return false if no checkbox is checked
    }

    // Function to handle the mouseover event on the submit button
    submitButton.addEventListener("mouseover", function () {
        if (!validateCheckboxes()) {
            // Change the button's position randomly if no checkbox is checked
            submitButton.style.position = "absolute";
            submitButton.style.left = Math.random() * (window.innerWidth - submitButton.offsetWidth) + "px";
            submitButton.style.top = Math.random() * (window.innerHeight - submitButton.offsetHeight) + "px";
        } else {
            // Set the button's position to static if a checkbox is checked
            submitButton.style.position = "static";
        }
    });
</script>

