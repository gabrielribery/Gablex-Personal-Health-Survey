<?php
    include_once 'tools/tools.php';
    $data = nextQuestionData();
?>
<div class="container">
<div style="text-align: center;">

    <!-- <h1>Number-Input</h1> -->
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
</div>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      const numberInput = document.getElementById('number');
      const button = document.querySelector('.btn');

      function updateButtonStatus() {
        const numberValue = parseInt(numberInput.value, 10);

        if (isNaN(numberValue) || numberValue < 0 || numberValue > 10) {
          button.setAttribute('disabled', true);
          button.textContent = 'Bitte geben Sie eine Zahl zwischen 0 und 10 ein';
          button.style.backgroundColor = '#FF0000';
          button.style.color = '#FFFFFF';
        } else {
          button.removeAttribute('disabled');
          button.textContent = 'Next';
          button.style.backgroundColor = '';
          button.style.color = '';
        }
      }

      numberInput.addEventListener('mouseover', function() {
        updateButtonStatus();
      });

      numberInput.addEventListener('change', function() {
        updateButtonStatus();
      });

      document.querySelector('form').addEventListener('submit', function(event) {
        const numberValue = parseInt(numberInput.value, 10);

        if (isNaN(numberValue) || numberValue < 0 || numberValue > 10) {
          event.preventDefault(); 
          button.setAttribute('disabled', true);
          button.textContent = 'Bitte geben Sie eine Zahl zwischen 0 und 10 ein';
          button.style.backgroundColor = '#FF0000';
          button.style.color = '#FFFFFF';
        }
      });
    });
  </script>
  </script>
