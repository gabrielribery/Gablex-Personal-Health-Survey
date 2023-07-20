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