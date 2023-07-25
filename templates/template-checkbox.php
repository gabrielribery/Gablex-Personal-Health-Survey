<?php
    include_once 'tools/tools.php';
    $data = nextQuestionData();
?>

<div class="container">
<div style="text-align: center;">

    <!-- <h1>Checkbox</h1> -->
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
document.addEventListener('DOMContentLoaded', function() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  const button = document.querySelector('.btn');

  function updateButtonStatus() {
    let checkedCount = 0;

    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        checkedCount++;
      }
    });

    if (checkedCount < 1) {
      button.setAttribute('disabled', true);
      button.textContent = 'Bitte wählen Sie mindestens eine Box aus';
      button.style.backgroundColor = '#FF0000';
      button.style.color = '#FFFFFF';
    } else {
      button.removeAttribute('disabled');
      button.textContent = 'Weiter';
      button.style.backgroundColor = '';
      button.style.color = '';
    }
  }

  button.addEventListener('mouseover', function() {
    updateButtonStatus();
  });

  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', function() {
      updateButtonStatus();
    });
  });

  document.querySelector('form').addEventListener('submit', function(event) {
    let checkedCount = 0;

    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        checkedCount++;
      }
    });

    if (checkedCount < 1) {
      event.preventDefault(); 
      button.setAttribute('disabled', true);
      button.textContent = 'Bitte wählen Sie mindestens eine Box aus';
      button.style.backgroundColor = '#FF0000';
      button.style.color = '#FFFFFF';
    }
  });
});

</script>

