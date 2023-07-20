<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="cssinput.css">
 </head>
 <body>

<?php
 session_start();

    include './header.php';
    include './question-template-switch.php';
    include './footer.php';
?>
  <canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1; background-color: transparent;"></canvas>

</body>
</html>
