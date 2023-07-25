<?php
 
    require_once 'session.php';
    include 'header_footer/header.php';
?>
<div style="text-align: center;">
    <div class="question">
    <h4>Welcome to the quiz.</h4>
<ul>
    Crying is allowed but cry quietly <br>
    Make sure that no tears fall on the keyboard while crying<br>
    If you have any questions, keep them to yourself<br>
    If you feel depressed turn the volume on and hit the Help button<br>

</ul>
</div>
</div>
<canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1; background-color: transparent;"></canvas>
<?php
    include 'tools/question-template-switch.php';
    include 'header_footer/footer.php';
    include 'tools/debug.php';
?>
  
