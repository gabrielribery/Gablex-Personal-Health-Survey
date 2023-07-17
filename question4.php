<?php
session_start();

// Redirect to the next question or the feedback page
if (!isset($_SESSION['question3'])) {
  header('Location: question3.php');
  exit;
}

if (isset($_SESSION['question10'])) {
  header('Location: feedback.php');
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Store the answer in the session
  $_SESSION['question4'] = $_POST['question4'];
  
  // Redirect to the next question
  header('Location: question5.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question 4</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h1>Question 4</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="question4">Welche zusätzliche körperliche Aktivität betreibst du am meisten?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_none" value="Keine zusätzliche körperliche Aktivität">
            <label class="form-check-label" for="activity_none">
              Keine zusätzliche körperliche Aktivität
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_weights" value="Gewichte heben">
            <label class="form-check-label" for="activity_weights">
              Gewichte heben
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_walk" value="Gehen">
            <label class="form-check-label" for="activity_walk">
              Gehen
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_hike" value="Wandern">
            <label class="form-check-label" for="activity_hike">
              Wandern
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_dance" value="Tanzen">
            <label class="form-check-label" for="activity_dance">
              Tanzen
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_aerobics" value="Aerobics">
            <label class="form-check-label" for="activity_aerobics">
              Aerobics
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_pilates" value="Pilates">
            <label class="form-check-label" for="activity_pilates">
              Pilates
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_team_sport" value="Team Sport">
            <label class="form-check-label" for="activity_team_sport">
              Team Sport
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="activity_other" value="Andere">
            <label class="form-check-label" for="activity_other">
              Andere
            </label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="activity_other_input" name="activity_other_input" placeholder="Bitte spezifizieren" style="display: none;">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
    </div>
  </div>
  <script>
    document.getElementById('activity_other').addEventListener('change', function() {
      var input = document.getElementById('activity_other_input');
      if (this.checked) {
        input.style.display = 'block';
        input.setAttribute('required', 'required');
      } else {
        input.style.display = 'none';
        input.removeAttribute('required');
      }
    });
  </script>
</body>

</html>
