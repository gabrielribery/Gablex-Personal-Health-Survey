<?php
    include_once 'tools/tools.php';
    $data = nextQuestionData();
?>
<div class="container">
<div style="text-align: center;">

    <!-- <h1>Radio-Button</h1> -->
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
<script>
document.addEventListener('DOMContentLoaded', function() {
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  const button = document.querySelector('.btn');
  const validationWarning = document.getElementById('validate-warning');

  function updateButtonStatus() {
    let checkedCount = 0;

    radioButtons.forEach((radio) => {
      if (radio.checked) {
        checkedCount++;
      }
    });

    if (checkedCount < 1) {
      button.setAttribute('disabled', true);
      button.textContent = 'Bitte wählen Sie eine Option aus';
      button.style.backgroundColor = '#FF0000';
      button.style.color = '#FFFFFF';
    } else {
      button.removeAttribute('disabled');
      button.textContent = 'Next';
      button.style.backgroundColor = '';
      button.style.color = '';
    }
  }

  button.addEventListener('mouseover', function() {
    updateButtonStatus();
  });

  radioButtons.forEach((radio) => {
    radio.addEventListener('change', function() {
      updateButtonStatus();
    });
  });

  document.querySelector('form').addEventListener('submit', function(event) {
    let checkedCount = 0;

    radioButtons.forEach((radio) => {
      if (radio.checked) {
        checkedCount++;
      }
    });

    if (checkedCount < 1) {
      event.preventDefault();
      button.setAttribute('disabled', true);
      button.textContent = 'Bitte wählen Sie eine Option aus';
      button.style.backgroundColor = '#FF0000';
      button.style.color = '#FFFFFF';
    }
  });
});

</script>


