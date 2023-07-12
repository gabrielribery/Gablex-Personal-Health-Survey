<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container">
  <h1>Startseite</h1>
  <p>Willkommen zur Umfrage. Bitte beantworten Sie die folgenden Fragen:</p>
  <form action="fragen/q2.php" method="post" onsubmit="return validateForm()">
    <div class="mb-3">
      <label for="physical-health">Wie gesund bist du körperlich?</label>
      <input type="range" class="form-range" id="physical-health" name="physical-health" min="0" max="5" value="0" oninput="updateSliderValue(this.value)">
      <span id="slider-value">0</span>
    </div>
    <button type="submit" class="btn btn-primary">Weiter</button>
  </form>
</div>

<script>
  function updateSliderValue(value) {
  document.getElementById("slider-value").textContent = value;
}
function validateForm() {
  var sliderValue = document.getElementById("physical-health").value;
  
  if (sliderValue == 0) {
    alert("Bitte wählen Sie eine Bewertung für Ihre körperliche Gesundheit.");
    return false; // Blockiert das Absenden des Formulars
  }
  
  return true; // Erlaubt das Absenden des Formulars
}
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
