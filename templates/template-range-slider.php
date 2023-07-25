<?php
    include_once 'tools/tools.php';
    $data = nextQuestionData();
?>

<div class="container">
<div style="text-align: center;">
    <!-- <h1>Range Slider</h1> -->

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
document.addEventListener('DOMContentLoaded', function() {
  const slider = document.getElementById('range-slider');
  const button = document.querySelector('.next');
  const validationWarning = document.getElementById('validation-warning');

  function updateButtonStatus() {
    const sliderValue = parseInt(slider.value, 10);
    if (sliderValue === 0) {
      button.setAttribute('disabled', true);
      button.textContent = 'Move the slider idiot';
      button.style.backgroundColor = '#FF0000'; 
      button.style.color = '#FFFFFF'; 
    } else {
      button.removeAttribute('disabled');
      button.textContent = 'Next';
      button.style.backgroundColor = '';
      button.style.color = ''; 
    }
  }

  slider.addEventListener('mouseover', function() {
    updateButtonStatus();
  });

  slider.addEventListener('change', function() {
    updateButtonStatus();
  });
});
</script>



