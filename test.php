<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .slider-container {
      position: relative;
      width: 300px;
      margin: 0 auto;
    }

    .slider-container .form-range {
      background-color: purple;
      height: 20px;
    }<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umfrage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    /* Hier beginnt der benutzerdefinierte CSS-Code */
    .slider-container {
      position: relative;
      width: 300px;
      margin: 0 auto;
    }

    .slider-container .form-range {
      /* Farbe des Sliders */
      background-color: blue;
      /* Größe des Sliders */
      height: 10px;
    }

    .slider-container .form-range::-webkit-slider-thumb {
      /* Farbe des Schiebereglers */
      background-color: red;
      /* Größe des Schiebereglers */
      width: 20px;
      height: 20px;
    }

    .slider-value {
      position: absolute;
      top: -30px;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
</head>

<body>
  <div class="container">
    <?php include("header.php"); ?>

    <main>
      <form id="surveyForm" method="POST" action="process.php">
        <h1>Startseite</h1>
        <p>Willkommen zur Umfrage. Bitte beantworte die folgende Frage:</p>
        <p>1. Wie gesund bist du körperlich?</p>
        <div class="mb-3 slider-container">
          <input type="range" class="form-range" min="1" max="5" step="1" id="healthRange" name="health">
          <div class="slider-value" id="healthValue"></div>
        </div>
        <button type="submit" class="btn btn-primary">Weiter</button>
      </form>

      <?php if (isset($_SESSION['health'])) { ?>
      <?php include("frage2.php"); ?>
      <?php } ?>
    </main>
  </div>

  <script src="script.js"></script>
</body>

</html>


    .slider-container .form-range::-webkit-slider-thumb {
    background-color: red; /*anstelle eines runden slider dings ein svg oder anderes img verwenden?*/
      width: 20px;
      height: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php include("header.php"); ?>

    <main>
      <form id="surveyForm" method="POST" action="process.php">
        <h1>Startseite</h1>
        <p>Willkommen zur Umfrage. Bitte beantworte die folgende Frage:</p>
        <p>1. Wie gesund bist du körperlich?</p>
        <div class="mb-3 slider-container">
          <input type="range" class="form-range" min="1" max="5" step="1" id="healthRange" name="health">
          <div class="slider-value" id="healthValue"></div>
        </div>
        <button type="submit" class="btn btn-primary">Weiter</button>
      </form>

      <?php if (isset($_SESSION['health'])) { ?>
      <?php include("frage2.php"); ?>
      <?php } ?>
    </main>
  </div>

  <script src="script.js"></script>
</body>

</html>
