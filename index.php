<?php
 
    require_once 'session.php';
    include './header.php';
?>
 <h1>Slider</h1>
    <div class="question">
    <h4>Welcome to the quiz.</h4>
<ul>
    <li>If you feel depressed hit the Help button</li>
    <li>Crying is allowed but cry quietly.</li>
    <li>Make sure that no tears fall on the keyboard while crying.</li>
    <li>If you have any questions, keep them to yourself.</li>
</ul>
<canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1; background-color: transparent;"></canvas>
<?php
    include './question-template-switch.php';
    include './footer.php';
    include 'debug.php';
?>
  
